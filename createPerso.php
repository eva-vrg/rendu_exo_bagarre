<?php

require_once 'Personnage.php';
require_once 'PersonnageManager.php';



$personnage = new Personnage();
$personnage->setNom($_POST['nom'])
        ->setTypeperso($_POST['perso']);

$persoManager = new PersonnageManager();

$saveIsOk = $PersonnageManager->save($personnage);

if($saveIsOk){
    $message = "le personnage a été ajouté";
}
else{
    $message = "le personnage n\'a pas été ajouté";
}

?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajout d'un personnage</title>
    </head>
    <body>
        <?= $message ?>
    </body>
    </html>