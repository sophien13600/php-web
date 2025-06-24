<?php
session_start(); 
$username = "Doe";
if ($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
}
$genre ="Monsieur";
if(isset ($_REQUEST['genre']) and $_REQUEST['genre'] =='femme'){
    
$genre = "Madame";
}

$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];


setcookie("nom", $username,);
$_SESSION['nom'] = $username;

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>
<body>
    <h1>Gestion d'utilisateur</h1>
     Bonjour <?="$genre $username vous avez $age ans et vous êtes de $ville"?>
     <a href="test.php">Consulter les cookies</a>
</body>
</html>