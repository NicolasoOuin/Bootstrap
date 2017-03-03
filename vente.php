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
                    <h2>NOS PRODUITS PHARES</h2>
                    <br>         
                    <div class="row"> <!-- Bloc des articles 1ere ligne -->
                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon5d.png" alt="Photo article">
                            <h3>Canon 5D Mark IV</h3>
                            <p class="prix">3790 €</p>
                            <a href="article.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon6d.png" alt="Photo article">
                            <h3>Canon 6D</h3>
                            <p class="prix">1598 €</p>
                            <a href="article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon7d.png" alt="Photo article">
                            <h3>Canon 7D</h3>
                            <p class="prix">1478 €</p>
                            <a href="article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>   
                    </div>
                    <br>
                    <div class="row"> <!-- Bloc des articles 2eme ligne -->
                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon80d.png" alt="Photo article">
                            <h3>Canon 80D</h3>
                            <p class="prix">1099 €</p>
                            <a href="article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon760d.png" alt="Photo article">
                            <h3>Canon 760D</h3>
                            <p class="prix">715 €</p>
                            <a href="article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="Images/canon100d.png" alt="Photo article">
                            <h3>Canon 100D</h3>
                            <p class="prix">387 €</p>
                            <a href="article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>   
                    </div>
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