<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Site e-commerce</title>
        <link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/vente.css" rel="stylesheet">
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
                <h2>APPAREILS PHOTO REFLEX NUMERIQUES - Le vrai prix !</h2>
                <br>
                    <ul class="pagination">

                        <li><a href="2.php">&laquo;</a></li>

                        <li><a href="1.php">1</a></li>

                        <li><a href="2.php">2</a></li>

                        <li class="active"><a href="#">3</a></li>

                        <li><a href="4.php">4</a></li>
                        
                        <li><a href="4.php">&raquo;</a></li>

                    </ul>
                    <br>         
                    <div class="row"> <!-- Bloc des articles 1ere ligne -->
                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="../../Images/canon100d.png" alt="Photo article">
                            <h3>Canon 100D</h3>
                            <p class="prix">387 €</p>
                            <a href="../../article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="../../panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="../../Images/canon100d.png" alt="Photo article">
                            <h3>Canon 100D</h3>
                            <p class="prix">387 €</p>
                            <a href="../../article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="../../panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>

                        <div class="col-md-4 article ">
                            <img class="photoArticle img-responsive" src="../../Images/canon100d.png" alt="Photo article">
                            <h3>Canon 100D</h3>
                            <p class="prix">387 €</p>
                            <a href="../../article2.php"><button type="button" class="btn btn-info">Descriptif</button></a>
                            <a href="../../panier.php"><button type="button" class="btn btn-danger">Acheter</button></a>
                        </div>
                    </div>
                    <br>
                    <ul class="pagination">

                        <li><a href="2.php">&laquo;</a></li>

                        <li><a href="1.php">1</a></li>

                        <li><a href="2.php">2</a></li>

                        <li class="active"><a href="#">3</a></li>

                        <li><a href="4.php">4</a></li>

                        <li><a href="4.php">&raquo;</a></li>

                    </ul>
            </article>
    </section>
    <br>
    <br>
    </div>
    <?php include("includes/footer.php") ?>




<script src="../../js/jquery.js">
</script>
<script src="../../js/bootstrap.js">
</script>
</body>
</html>