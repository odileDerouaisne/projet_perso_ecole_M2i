
<!DOCTYPE html>
<!--
Authentification.php
-->
<html lang="en">
    <head>
        <title>Authentification.php</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../css/style.css" media='screen'>
    </head>

    <body>
        <header> 
        <?php
            include "navPrincipal.php";
            ?>
        </header
        <section id="center">
            <article>
                <!--                <h1>Authentification</h1>-->
                <div id="conteneur">
                <div class="element"><br>
                    <h2>Inscription</h2><br><br>
                    <form action="../MainCTRL.phpCTRL.php" method="get"><br><br>
                        <p>
                            <img class="logo" src="images/signatureRondNBWD02b" alt="logo"><br>
                        </p>
                        <p>
                            <label for="emailClient" class="etiquette">Email</label>
                            <input type="text" class="obligatoire" name="emailClient" id="emailClient" placeholder="Email ?" />
                            <label>*</label>
                        </p>
                        <p>
                            <label for="emailClient" class="etiquette">Confirmation Email</label>
                            <input type="text" class="obligatoire" name="emailClient2" id="emailClient" placeholder="Email ?" />
                            <label>*</label>
                        </p>
                        <p>
                            <label for="pwdClient" class="etiquette">Mot de passe</label>
                            <input type="password" class="obligatoire" name="pwdClient" id="pwdClient" placeholder="Mot de passe ?"/>
                            <label>*</label>
                        </p>
                           <p>
                            <label for="pwdClient" class="etiquette">Confirmation du mot de passe</label>
                            <input type="password" class="obligatoire" name="pwdClient2" id="pwdClient" placeholder="Mot de passe ?"/>
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
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

