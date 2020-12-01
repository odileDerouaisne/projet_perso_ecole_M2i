<!DOCTYPE html>
<!--
Projet personnel formation M2i - Odile Derouaisné pour Weline Deem
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" />
        

    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>
    <body>
        <header> 
        <?php
            include "navPrincipal.php";
         ?>
        </header>   
        <div class="jumbotron">
            <h1 class="text-center text-lg-center">Weline Deem</h1>
            <h3 class="text-center text-lg-center">Character Designer Illustration,Comic Art, scenario</h3>
            <p class="text-center text-lg-center">
               
                <section class="text-center text-lg-center" class='presentation'>
                  Hello ! I'm Weline Deem. <br>
               The drawing is my first big passion. It’s my life ! <br>
               I have been drawing since I can hold a pencil. <br>
               I am a big dreamer and I happen draw my dreams or to write stories. <br>
               I created many different universes and today, I have two comics : "Devitae" and "Dices Game" on Mangadraft.<br></p>
               </section>
        </div>
        <div class="container">
                   
               <p><br>
                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                   <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="../images/vetements/t-shirt.jpg" class="d-block w-auto" alt="t-shirt">
                    </div>
                   <div class="carousel-item">
                      <img src="../images/vetements/TShirtPanda.PNG" class="d-block w-50" alt="t-shirt">
                   </div>
                        <div class="carousel-item">
                      <img src="../images/vetements/tShirtPandaAstronaute.PNG" class="d-block w-50" alt="t-shirt">
                   </div>
                        <div class="carousel-item">
                      <img src="../images/decoMaison/CoussinUniv1Devitae.PNG" class="d-block w-50" alt="coussin">
                   </div>
                         <div class="carousel-item">
                      <img src="../images/decoMaison/CoussinAnimalCrossing.PNG" class="d-block w-50" alt="coussin">
                   </div>
                        <div class="carousel-item">
                      <img src="../images/papeterie/StickersTheMask.PNG" class="d-block w-50" alt="stickers">
                   </div>
                </div>
             </div>
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Suivant</span>
                </a>
             </div>
               </p><br>
        </div>
    </body>
    <?php
       include "Footer.php";
     ?>
</html>
