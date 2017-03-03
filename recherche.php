<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site e-commerce</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/vente.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300" rel="stylesheet"> 
    </head>
    <body id="page-index">

        <?php include ("includes/header.php") ?>      

        <div class="container" id="pagemid">
            <?php include ("includes/carousel.php") ?>

            <section class="row container">
                <br>

                <?php include ("includes/aside.php") ?>

                <article class="col-md-9 col-md-offset-1 col-sm-12 article-bc">   
                    <h1>La liste des utilisateurs inscrits</h1>
                    <hr>
                    <?php
                    
                    
                    
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "bddformation";
                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    echo "Connected successfully";
                    // on vérifie si la variable existe
                    $varRecherche =isset($_POST['recherche']) ? $_POST['recherche'] : NULL;                  
                    $sql = "SELECT * FROM nicolas WHERE nom LIKE '%$varRecherche%' OR prenom LIKE '%$varRecherche%' OR ville LIKE '%$varRecherche%' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo('<table border="1">
                        <colgroup width =150 span=12></colgroup>
                            <thead> <!-- En-tête du tableau -->
                                <tr>
                                     <th>Id</th>
                                     <th>Nom</th>
                                     <th>Prénom</th>
                                     <th>Ville</th>
                                 </tr>
                            </thead>
                            <tbody> <!-- Corps du tableau --> ');
                        while ($donnees = $result->fetch_assoc()) {
                            echo ('<tr>');
                            echo ('<td>' . $donnees['id'] . '</td>');
                            echo ('<td>' . $donnees['nom'] . '</td>');
                            echo ('<td>' . $donnees['prenom'] . '</td>');
                            echo ('<td>' . $donnees['ville'] . '</td>');
                            echo('</tr>');
                        }
                        echo('<tbody>');
                        echo('</table>');
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

                    <br><br>
                </article>                

            </section>
            <br>
            <br>
        </div>

        <?php include ("includes/footer.php") ?>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.js">
        </script>
        <script src="js/bootstrap.js">
        </script>
    </body>
</html>