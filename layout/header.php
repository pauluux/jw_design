<?php ?>

<!doctype html> 


<html lang="fr">
    
    
    
<head>

    
    <meta charset="utf-8">

    <meta name="description" content="<?php echo $content;?>">
    
    <title><?php echo $title; ?></title>
     
      <!--favicone-->
      
    <link rel="shortcut icon" href="#">
    
    <!--feuille de style-->
    
    <!--NORMALISE-->
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all">
    
    <!-- GRILLE -->
    <link rel="stylesheet" href="css/grid-12.css" type="text/css" media="all">
    
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    
    <!-- style de page-->
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="all">
    
    <?php foreach ($stylesheets as $path) : ?>
    <link rel="stylesheet" href= <?php echo $path; ?> type="text/css" media="all">
    <?php endforeach; ?>
   
</head>
    
<body> 
        
       
