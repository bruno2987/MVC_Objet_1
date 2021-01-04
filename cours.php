<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="cours.php" method='POST'>
    <label for='nom'>Nom d'utilisateur</label>
    <input type='text' name='nom'><br>
    <label for='pass'>Mot de passe</label>
    <input type='text' name='pass'><br>
    <input type='submit' value='Envoyer'>
</form>


<?php
require 'classes/utilisateur.class.php';      // on charge le programme utilisateur.class.php

/*
$pierre= new Utilisateur('Pierre','1234');
$mathilde= new Utilisateur('Mathilde','1234');
*/

$pierre = new Utilisateur($_POST['nom'],$_POST['pass']);


echo $pierre->getNom().'<br>';
//echo $mathilde->getNom().'<br>';

?>
    
</body>
</html>