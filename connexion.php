<?php
// Hachage du mot de passe
$pass_hache = sha1 ( $_POST ['']);
// Vérification des identifiants
$req = $bdsmartdrive -> prepare ('SELECT id FROM bdsmartdrive_membres WHERE pseudo=:pseudo AND pass=:pass');
$req -> execute ( array ('pseudo' => $pseudo ,'pass' => $pass_hache ));
$resultat = $req -> fetch ();
if (! $resultat ){
echo 'Mauvais identifiant ou mot de passe !';
}
else
{
session_start ();
$_SESSION ['id'] = $resultat ['id'];
$_SESSION ['pseudo'] = $pseudo ;
echo 'Vous êtes connecté !';
}
    
?>
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

        <?php include("includes/header.php") ?>
        <div class="container" id="pagemid">
            <?php include("includes/carousel.php") ?>

            <section class="row container">
                <br>
                <?php include("includes/aside.php") ?>

                <article class="col-md-9 col-md-offset-1 col-sm-12 article article-bc">   
                    <h2></h2><br>
                    <?php /*
                    session_start();
                    $titre = "Connexion";
                    if ($id != 0)
                        erreur(ERR_IS_CO);

                    function erreur($err = '') {
                        $mess = ($err != '') ? $err : 'Une erreur inconnue s\'est produite';
                        exit('<p>' . $mess . '</p> <p>Cliquez <a href="./index.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');
                    }

                    define('ERR_IS_CO', 'Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');

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
                    echo "Database : Connected successfully";

                    // on vérifie si la variable existe
                    /*$varPseudo = isset($_POST['email']) ? $_POST['email'] : NULL;
                    $varPassword = isset($_POST['mdp']) ? $_POST['mdp'] : NULL;

                    $sql = "SELECT nom FROM nicolas WHERE pseudo = '$varPseudo' AND password = '$varPassword'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo 'Vous ête désormais connecté en tant que ' . $donnees['prenom'] . ' ' . $donnees['nom'];
                    } elseif ($result) {
                        echo 'Mot de passe ou identifiants invalide.';
                    };
                     * 
                     */
                    ?>

                    <div class="row"> 
                        <div class="col-md-6 col-sm-6">
                            <form method="post" action="connexion.php" method="post">
                                <fieldset>
                                    <legend>Je suis déjà client</legend>
                                    <label for="email">Votre Email </label>
                                    <input type="email" name="email" id="email" size="30" maxlength="50" placeholder="Votre Email" /><BR><BR>
                                    <label for="mdp">Votre mot de passe </label>
                                    <input type="password" name="mdp" id="mdp" size="30" maxlength="50" placeholder="Votre mot de passe" /><BR><BR>                                    
                                    <a href="vente.php"><button type="button" class="btn btn-success">Valider</button></a>
                                    <p>Vous avez oublié votre mot de passe ? <a href="#">cliquez ici</a></p>
                                </fieldset>
                            </form>
                        </div>

                        <div class="col-md-6 col-sm-6">
                            <form method="post" action="#">
                                <fieldset>
                                    <legend>Je ne suis pas encore client</legend>
                                    <label for="email">Votre Email </label>
                                    <input type="email" name="email" id="email" size="30" maxlength="50" placeholder="Votre Email" /><BR><BR>
                                    </form>
                                    <a href="inscription.php"><button type="button" class="btn btn-success">Valider</button></a>
                                </fieldset>
                        </div>


                        <?php
                        if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
                        {
                        echo '
                        
                        <form method="post" action="connexion.php">
                            <fieldset>
                                <legend>Connexion</legend>
                                <p>
                                    <label for="pseudo">Pseudo </label><input name="pseudo" type="text" id="pseudo" /><br>
                                    <label for="pass">Mot de Passe </label><input type="password" name="pass" id="pass" /><br>
                                    <label for="stayco">Connexion automatique </label><input type="checkbox" name="stayco" id="stayco"><br>
                                    <input type="submit" value="Connexion" />
                                </p>
                            </fieldset>
                        </form>
                        <a href="./register.php">Pas encore inscrit ?</a>
                        ';
                        }
                        ?>
                        
                        <?php
                            if ( isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
                            {
                                echo 'Bonjour '.$_SESSION['pseudo'];
                            }
                        
                        ?>
                    </div>
                </article>
            </section>
            <br>
            <br>
        </div>
        <?php include("includes/footer.php") ?>




        <script src="js/jquery.js">
        </script>
        <script src="js/bootstrap.js">
        </script>
    </body>
</html>