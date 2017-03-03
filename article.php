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
                            <img class="photoArticle img-responsive" src="Images/canon5d.png" alt="Photo article">
                        </div>
                        <div class="col-md-5 col-md-offset-1 col-sm-5 col-sm-offset-1">
                            <h3>Canon 5D Mark IV</h3>
                            <p>Bénéficiez d'une qualité d'image sans compromis et de performances ultra-professionnelles.<br>
                                L'EOS 5D Mark IV est un appareil photo polyvalent complet.<br>
                                Canon est parvenu à un niveau de détail inédit, grâce à un nouveau capteur offrant une résolution extraordinaire.<br>
                                L'EOS 5D Mark IV propose une mise au point et une mesure d'exposition avancées, qui vous aideront à immortaliser l'instant sur le vif, même dans des conditions d'éclairage difficiles.

                            </p>
                            <p class="prix">Prix : 3790 €</p>
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