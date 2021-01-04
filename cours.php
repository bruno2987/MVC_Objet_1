<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require 'classes/utilisateur.class.php';      // on charge

$pierre= new Utilisateur();
$mathilde= new Utilisateur();

$pierre->setNom('Pierre');
$pierre->setPass('1234');

$mathilde->setNom('Mathilde');
$mathilde->setPass('1234');

echo $pierre->getNom();

?>
    
</body>
</html>