
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
                <!--  <h1>INSCRIPTION</h1>-->
                <div id="conteneur">
                <div class="element">
                    <h2>Inscription</h2>
                    <div class="gotoinscription"><br>
                    <br>
                    </div>
                    <form action="../AuthentificationCTRL.php" method="get">
                        <p>
                            <img class="logo" src="../images/icones/signatureRondNBWD02b.png" width="150" px-6 mx-6 alt="logo"><br>
                        </p>
                        <p>
                            <label for="nomClient" class="etiquette">Nom</label>
                            <input type="text" class="obligatoire" name="nomClient" id="nomClient" placeholder="Nom ?" />
                            <label>*</label>
                        </p>
                        <p>
                            <label for="prenomClient" class="etiquette">Prénom</label>
                            <input type="text" class="obligatoire" name="prenomClient" id="prenomClient" placeholder="Prénom ?" />
                            <label>*</label>
                        </p>
                        <p>
                            <label for="adresseClient" class="etiquette">Adresse</label>
                            <input type="text" class="obligatoire" name="adresseClient" id="adresseClient" placeholder="Adresse ?" />
                            <label>*</label>
                        </p>
                        <p>
                            <label for="villeClient" class="etiquette">Ville</label>
                            <input type="text" class="obligatoire" name="villeClient" id="villeClient" placeholder="Ville ?" />
                            <label>*</label>
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
                            <label for="telephoneClient" class="etiquette">Téléphone</label>
                            <input type="text" class="obligatoire" name="telephoneClient" id="telephoneClient" placeholder="Téléphone ?" />
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
                        <p>* = Champ obligatoire</p>
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

