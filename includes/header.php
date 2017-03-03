
<header id="pagetop">
    <!--Haut du header - Logo - Barre de recherche - Zone d'inscription et de connexion - Panier-->
    <div class="container">
        <div class="row">
            <!--Logo-->
            <div class="col-md-4">
                <a href="/"><img id="logo" class="img-responsive" src="Images/logo3.png" alt=""></a>
            </div>
            <!--Zone d'inscription/connexion et panier-->
            <div class="col-md-8 col-sm-12 col-xs-12">
                <!--Inscription/connexion-->

                <div class="col-md-7 col-sm-7 col-xs-12 compte">
                    <ul class="list-unstyled text-center">
                        <li><a href="connexion.php">Connexion</a></li><br>
                        <li><a href="Inscription.php">Créer un compte</a></li>
                    </ul>
                </div>
                <!--Panier-->
                <div class="col-md-5 col-sm-5 text-center">
                    <a href="panier.php" class="pan">
                        <span>Vos articles</span>                            
                        <div class="panier">
                            <img class="img-panier img-responsive" src="Images/shop.png" alt="">
                        </div>
                        <div class="text-panier">
                            <span>2</span>
                        </div>                       
                    </a>                  
                    <div class="contain">
                        <div class="pan row">

                            <article class="col-md-12 col-sm-12 article">


                                <div class="row"> <!-- Bloc Référence/Quantité/Prix/Total -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Canon EOS 5D Mark IV</p><br>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p><input type="number" value= "1" min="0" max="5"></p><br>                  
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>3158,59 €</p><br>
                                    </div>
                                </div>

                                <div class="row"> <!-- Bloc Référence/Quantité/Prix/Total -->
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Canon EOS 100D</p><br>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p><input type="number" value= "1" min="0" max="5"></p><br>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>322,53 €</p><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                                        <p>Total HT : </p>
                                        <p>TVA : </p>
                                        <p>Total : </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <p>3481,12 €</p>
                                        <p>20%</p>
                                        <p>4177 €</p>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="vente.php"><button type="button" class="btn btn-warning">Continuer les achats</button></a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="livraison.php"><button type="button" class="btn btn-success">Valider mon panier</button></a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <ul class="nav navbar-nav padding">
                <form action=""></form>
                <input type="search" class="input-sm form-control" placeholder="Rechercher">
                <button type="submit" class="btn btn-primary btn-sm buttonsearch"><span class="glyphicon glyphicon-search"></span></button>
                </form>                    
            </ul>
        </div>
    </nav>

    <!--Menu-->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" id="menu0">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Menu</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menu1">
                <ul class="nav navbar-nav">
                    <li><a href="vente.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>

                <form class="navbar-form navbar-right hidden-xs" action="recherche.php" method="post">                
                    <div class="form-group">
                        <input type="text" name="recherche" class="form-control" placeholder="Rechercher">
                    </div>
                    <button type="submit" name="valider" value="recherche" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </form>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>