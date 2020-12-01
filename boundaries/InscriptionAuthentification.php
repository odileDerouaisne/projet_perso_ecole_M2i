<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
                      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
                      crossorigin="anonymous">

        <title>Weline Deem</title>
    </head>
    <body>

        <header> 
            <?php
            include "navPrincipal.php";
            ?>
        </header>

    </div>
    <div class="jumbotron">
        <h1 class="text-center text-lg-center">Connexion ou Création d'un compte client</h1>
        <h3 class="text-center text-lg-center">Pour accéder au paiement.</h3>
    </div>
    <div class="container">


        <div class="row">
            <div class="col-6 col-12 col-lg-6">
                <div class="card">
                    <img src=”../images/illustrations/Carte_Octobre01cb.jpg” alt=”squeletteGerard” class=”card-img-top”>
                    <div class="card-body">
                        <h5 class="card-title">Authentification</h5>
                        <p class="card-text">Pour vous connecter à votre compte client</p>
                        <form>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="publicCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Rendre cette notation publique
                                    </label>
                                    
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div class="col-6 col-12 col-lg-6">
                    <div class="card">
                        <img src=”../images/vetements/TShirtPanda.png” alt=”squeletteGerard” class=”card-img-top”>
                        <div class="card-body">
                            <h5 class="card-title">Inscription</h5>
                            <p class="card-text">Pour une création de compte client</p>
                        </div><br><br>
                    </div>
                </div>


            </div>
        </div>
        <?php
        include "footer.php";
        ?>
</body>
</html>
