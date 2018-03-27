<?php

phpinfo();die;
require_once 'functions.php';
require_once 'model/database.php';
//Déclaration des variables php



//debug($liste_photo, false);
$liste_photo = getAllPhotos();

getHeader("Accueil", "Jean Webdesign le site qui t'explose le crâne");
?>


<header class="header-home">
    <div id="header_content" class="row col_center">

        <?php getMenu(); ?>

        <h2>Hello ! Je suis Jean Webdesign</h2>
        <h3>J'aime bidouiller photoshop</h3>

    </div>
</header>  

<main>
    <section id="photos">
        <div id="photo_content" class="row col_center">
            <h2>Dernières photos</h2>

            <?php foreach ($liste_photo as $photo): ?>


                <?php include 'include/photo_inc.php'; ?> 

            <?php endforeach; ?>

        </div>
    </section>
    <section id="contact">
        <h2>Prenons contact</h2>
        
<?php $fichier_css = ["css/contact.css", "css/test.css"]?>
        
        
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, odit, necessitatibus. Accusamus ipsum quisquam aliquam labore..</h3>
        <a href="contact.php">ME CONTACTER</a>
    </section>
</main>


<?php
getFooter();
