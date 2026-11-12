<?php
    require('./components.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clinica Estética Premium</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=wand_stars,fingerprint,flare,spa,health_and_safety,schedule" />

        <link rel="stylesheet" href="./assets/css/app.css">
    </head>
    <body>
        
        <?php include('./containers/header.php'); ?>
        <?php include('./containers/banner.php'); ?>
        <?php include('./containers/standards.php'); ?>
        <?php include('./containers/atelier.php'); ?>

        <script src="./assets/js/app.js"></script>
    </body>
</html>
