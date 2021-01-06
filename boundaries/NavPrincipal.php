<?php
/* 
 * Authentification.php
 */

session_start();

?>
<!doctype html>
<html lang="en">

    <head>

            <!-- Required meta tags -->

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="../css/Style.css" media ="screen">
        <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

      <body>
        <header class="container-fluid">

            <!-- MENU CONNEXION PANIER -->
            <div class="bg-dark" id="menu_connexion_panier">
                <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
                    <div class="col-xs-12 "></div>
                    <ul class="navbar-nav nav-tab nav-justified">
                        <li class="nav-item active px-3 mx-3"></li>
                        <a  class="nav-link" href="Authentification.php"><img style="width:118px " src="../images/icones/connexionClientDetouré.png"class="px-2 mx-2"></img> Login</a>
                        <li class="nav-item active px-3 mx-3"></li>
                        <a  class="nav-link" href="panier.php"><img style="width:40px" id="panier" src="../images/icones/caddie.png"> </img>Panier</a>
                    </ul>
                </nav> 
            </div>

            <!-- BANIERE IMAGE -->
            <div class="container-fluid" class="bg-dark nav-bar-dark" id="banniere_image">
                <div class=" row"col="12">
                    <img class="img-fluid max-width: 100% height: auto " alt="Responsive image" src="../images/baniere.jpg" alt="image-baniere" >  
                </div>
            </div>

            <!-- Menu PRINCIPAL -->
            <div class="bg-dark nav-bar-dark">
                   <div class="container">
                    <div class="row" id="logo">
                        <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
                            <a class="navbar-brand" href="Accueil.php"> Weline Deem</a>
                            <img src="../images/icones/signatureRondNBWD02b.png" width="50" height="50" alt="Site logo"> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="navbarContent" class="collapse navbar-collapse"> 
                                <ul class="navbar-nav nav-tab nav-justified" >
                                    <li class="nav-item active px-4 mx-4">
                                        <a class="nav-link pr-20" href="Accueil.php ">Accueil</a>
                                    </li>
                                    <li class="nav-item p-20 px-4 mx-4">
                                        <a class="nav-link pr-10" href="ShopGeneral.php ">Shop</a>
                                    </li>
                                    <li class="nav-item px-4 mx-4">
                                        <a class="nav-link" href="APropos.php">About</a>
                                    </li>
                                    <li class="nav-item px-4 mx-4">
                                        <a class="nav-link" href="FAQ.php">FAQ</a>
                                    </li>
                                    <li class="nav-item px-4 mx-4">
                                        <a class="nav-link" href="Contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>    
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>

