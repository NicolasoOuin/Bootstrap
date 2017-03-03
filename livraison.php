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
            <div class="row">
            <h2>Adresse de livraison</h2><br>
                <div class="col-md-3 col-sm-3">
                    <input type="radio" name="lieu" value="livraison" id="livraison" />
                    <label for="ssd">Adresse de livraison</label>
                    </div>
                    <div class="col-md-3 col-sm-3 livraison">
                    <p>Dupont Eric</p>
                    <p>24 Rue de la gare</p>
                    <p>27415 Mon village</p>
                </div>
                <div class="col-md-3 col-sm-3">
                    <input type="radio" name="lieu" value="facturation" id="facturation" />
                    <label for="monde">Adresse de facturation</label>
                    </div>
                    <div class="col-md-3 col-sm-3 livraison">
                    <p>Dupont Eric</p>
                    <p>3 Avenue de l'industrie</p>
                    <p>27000 Evreux</p>
                </div>
            </div>
            <a href="validation.php"><button type="button" class="btn btn-success">Continuer</button></a><br><br>

            <div class="livraison">
                <legend>Ajouter une adresse</legend>
                <label for="nom">Nom </label>
                <input type="text" name="nom" id="nom" size="25" maxlength="40" placeholder="Dupont" /><BR><BR>
                <label for="prenom">Prénom </label>
                <input type="text" name="prenom" id="prenom" size="25" maxlength="40" placeholder="Eric" /><BR><BR>
                <label for="adresse">Adresse postale </label>
                <input type="text" name="adresse" id="adresse" size="40" maxlength="60"/><BR><BR>
                <label for="cp">Code postal </label>
                <input type="text" name="cp" id="cp" size="5" maxlength="10"/><BR><BR>
            </div>
            <a href="validation.php"><button type="button" class="btn btn-success">Ajouter</button></a><br><br>
            
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