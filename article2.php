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
                    <h2>APPAREILS PHOTO REFLEX NUMERIQUES</h2>
                    <div class="row"> <!-- Bloc des articles 1ere ligne -->
                        <div class="col-md-6 col-sm-6">
                            <br>
                            <img class="photoArticle img-responsive" src="Images/canon6d.png" alt="Photo article">
                        </div>
                        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
                            <h3>Canon EOS</h3>
                            <p>Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.
                            Quae dum ita struuntur, indicatum est apud Tyrum indumentum regale textum occulte, incertum quo locante vel cuius usibus apparatum. ideoque rector provinciae tunc pater Apollinaris eiusdem nominis ut conscius ductus est aliique congregati sunt ex diversis civitatibus multi, qui atrocium criminum ponderibus urgebantur.
                            </p>
                            <p class="prix">Prix : €€€€</p>
                            <input type="number" value= "1" min="0" max="5">
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>
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