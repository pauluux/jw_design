<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$photo = getPhoto($id);
$liste_commentaires = getAllCommentairesByPhoto($id);


getHeader($photo["titre"], "Descritpion de la photo");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>

</header>

<h1><?php echo $photo["titre"]; ?></h1>

<img src="image/<?php echo $photo["image"]; ?>" alt="mini" title="mini">

<p><?php echo $photo["date_creation_format"]; ?></p>

<p><?php echo $photo["description"]; ?></p>

<form method="POST" action="insert-commentaire.php">
    <textarea name="commentaire" rows="2" cols="50"></textarea>
       
           <input type="hidden" name="photo_id" value="<?php echo $id;?>">
           <input type="submit" value="Envoyer" class="message"/>
</form>

<section>
        <?php foreach ($liste_commentaires as $commentaire): ?>
            <article>
                
                <time datetime="<?php echo $commentaire["date_creation"];?>">
                    <?php echo $commentaire["date_creation"];?>
                </time>
                
                <p><?php echo $commentaire["contenu"];?></p>
            </article>
        <?php endforeach; ?>
</section>


<?php getFooter(); ?>