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
            <h2>Validation de vos achats</h2><br>

            <div class="row titre_panier">
                    <div class="col-md-3 col-sm-3">
                    <p>Références</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3">
                    <p>Quantité</p><br>       
                    </div>

                    <div class="col-md-3 col-sm-3">
                    <p>Prix unitaire</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3">
                    <p>Total HT</p><br>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    <p>Canon EOS 5D Mark IV</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <p>1</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <p>3158,59 €</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 panier_total">
                    <p>3158,59 €</p><br>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                    <p>Canon EOS 100D</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <p>1</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                    <p>322,53 €</p><br>
                    </div>

                    <div class="col-md-3 col-sm-3 panier_total">
                    <p>322,53 €</p><br>              
                    </div>
            </div>

                <div class="row">
                    <div class="col-md-3 col-md-offset-6 col-sm-3 col-sm-offset-6 col-xs-6 ">
                        <p>Total HT : </p>
                        <p>TVA : </p>
                        <p>Total : </p>
                    </div>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                        <p>3481,12 €</p>
                        <p>20%</p>
                        <p>4177 €</p>
                        </div>
            </div><br>
            <div class="row">
                <div class="col-md-3 col-md-offset-9 col-sm-3 col-sm-offset-9 col-xs-6 col-xs-offset-6">
                <a href="vente.php"><button type="button" class="btn btn-success">Acheter</button></a>
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