<?php

require_once 'PersonnageManager.php';
require_once 'Personnage.php';

$persoManager = new PersonnageManager();
$personnages = $persoManager->readAll();
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste perso</title>
    
</head>
<body>
<h1>Lister tous les personnages<h1>   
    
    <?php if(empty($personnages)): ?>
    <p>Il n'y a aucun contact à afficher</p>

    <?php else: ?>
        <?php if($personnages === false): ?>
        <p>Une erreur est survenue</p>

        <?php else: ?>
            <ul>
                <?php foreach ($personnages as $personnage): ?>
                    <li><?= $personnage->getNom() ?></li>
                <?php endforeach; ?>

            </ul>

        <?php endif; ?>

    <?php endif; ?>


</body>
</html>
