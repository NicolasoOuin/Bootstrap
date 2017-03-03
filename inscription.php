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

                <article class="col-md-9 col-md-offset-1 col-sm-12 article article-bc formulaire">   
                    <br>
 
                    <fieldset>
                        <legend>Vos données personnelles</legend>
                        <label for="email">Confirmez votre Email </label>
                        <input type="email" name="email" id="email" size="25" maxlength="40"/><BR><BR>

                        <label for="mdp">Votre mot de passe </label>
                        <input type="password" name="mdp" id="mdp" size="25" maxlength="40"/><BR><BR>

                        <label for="mdp">Confirmez votre mot de passe </label>
                        <input type="password" name="mdp" id="mdp" size="25" maxlength="40"/><BR><BR>

                        <label for="nom">Nom </label>
                        <input type="text" name="nom" id="nom" size="25" maxlength="40"/><BR><BR>

                        <label for="prenom">Prénom </label>
                        <input type="text" name="prenom" id="prenom" size="25" maxlength="40"/><BR><BR>

                        <label for="adresse">Adresse postale </label>
                        <input type="text" name="adresse" id="adresse" size="40" maxlength="60"/><BR><BR>

                        <label for="cp">Code postal </label>
                        <input type="text" name="cp" id="cp" size="25" maxlength="40" /><BR><BR>

                        <label for="mail">Adresse électronique </label>
                        <input type="email" name="mail" id="mail" size="25" maxlength="40"/><BR><BR>

                        <label for="portable">Téléphone fixe</label>
                        <input type="tel" name="fixe" id="fixe" size="25" maxlength="40" /><BR><BR>

                        <label for="portable">Téléphone portable</label>
                        <input type="tel" name="portable" id="portable" size="25" maxlength="40" /><BR><BR>

                        <a href="vente.php"><button type="button" class="btn btn-success">Valider</button></a>

                    </fieldset>

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