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
<?php include ("includes/header2.php") ?> 
<div class="container" id="pagemid">
     <section class="row container">
                <br>
            <?php include("includes/aside2.php") ?>
                     
            <article class="col-md-9 col-md-offset-1 col-sm-12 article article-bc">   
            <h2>Dernières commandes</h2><br>
                <div class="row"> 
                        <div class="col-md-3 col-sm-3">
                            <p>Références</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <p>Clients</p><br>       
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <p>Date</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3">
                            <p>Prix TTC</p><br>
                        </div>
                    </div>
                <div class="row"> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <p>Canon EOS 5D Mark IV</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <p>Axel</p><br>                  
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <p>25/01/2017</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3 panier_total">
                            <p>3790 €</p><br>
                        </div>
                    </div>
            
                <div class="row"> 
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <p>Canon EOS 7D Mark II</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <p>Patrick</p><br>                  
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <p>23/01/2017</p><br>
                        </div>

                        <div class="col-md-3 col-sm-3 panier_total">
                            <p>1478 €</p><br>
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