<?php
/* 
 * Authentification.php
 */

session_start();

?>
<!DOCTYPE html>
<!--
Authentification.php
-->
<html lang="en">
    <head>
        <title>Authentification.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/Style.css" media='screen'>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <header class="container-fluid">
         <nav class="navbar navbar-expand-xl bg-dark navbar-dark">
              <div class="row col-xs-12" id="logo">
                    
                        <a class="navbar-brand" href="Accueil.php"> Weline Deem</a>
                        <img id="logo-nav" src="../images/icones/signatureRondNBWD02b.png" width="60" height="60" alt="Site logo">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbarContent" class="collapse navbar-collapse"> 
                            <ul class="navbar-nav nav-tab nav-justified" >
                                <li class="nav-item active pr-20">
                                    <a class="nav-link px-4 mx-4" href="Accueil.php ">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4 mx-4" href="ShopGeneral.php ">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4 mx-4" href="APropos.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4 mx-4" href="FAQ.php">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-4 mx-4" href="Contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>    
                    
                </div>
          </nav>
      </header>      
        
<section id="center" class="container-fluid"><p><br></p>
    <article>
        <!--   <h1>Authentification</h1>-->
        <div id="conteneur" ml-4 pl-6>

            <div class="element"><br>
                
                <header>
                    <h2>Authentification</h2>
                    <div class="gotoinscription">Pas encore client ?<br>
                    Créer un compte : <a href="./Inscription.php">Inscription ici</a><br><br>
                    </div>
                    <img id="sign" src="../images/icones/signatureRondNBWD02b.png" width="150" px-6 mx-6 alt="logo">
                    <br>
                </header><br>
                <form action="../controls/AuthentificationCTRL.php" method="get">

                    <p>
                        <label for="emailClient" class="etiquette">Email</label>
                        <input type="text" class="obligatoire" name="emailClient" id="emailClient" placeholder="Email ?" />
                        <label>*</label>
                    </p>
                    <p>
                        <label for="pwdClient" class="etiquette">Mot de passe</label>
                        <input type="password" class="obligatoire" name="pwdClient" id="pwdClient" placeholder="Mot de passe ?"/>
                        <label>*</label>
                    </p>

                    <p>
                        <label for="chkPwdVisible" class="etiquette">Mot de passe visible</label>
                        <input type="checkbox" name="chkPwdVisible" id="chkPwdVisible" />
                    </p>

                    <p>
                        <label for="chkSeSouvenir" class="etiquette">Se souvenir de moi</label>
                        <input type="checkbox" name="chkSeSouvenir" id="chkSeSouvenir" />
                    </p>

                    <p>
                        <a href ="#" id="motDePasseOublie">Mot de passe oublié ?</a>
                    </p>
                    <br>
                    <p id="pButtons">
                        <label class="etiquette">&nbsp;</label>
                        <button type="reset" name='btReinitialiser' id='btReinitialiser' value="R&eacute;initialiser">
                            R&eacute;initialiser
                        </button>
                        <button type="submit" name='btValider' id='btValider'>
                            Valider
                        </button>
                    </p>
                    <input type="hidden" name="action" value="AuthentificationValidation" />
                </form>
            </div>

        </div><!--conteneur-->
    </article>
</body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

