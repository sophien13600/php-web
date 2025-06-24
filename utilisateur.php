<?php
session_start(); 
if (is_null($_SERVER['HTTP_REFERER']) or (!str_contains($_SERVER['HTTP_REFERER'], 'index.php') and !str_contains($_SERVER['HTTP_REFERER'], 'inscription.php'))) {
    header("location: index.php"); // redirection
    exit(); // ne pas lire la suiteif((!isset(!str_contains($_SERVER['HTTP_REFERER'], 'index.php') and !str_contains($_SERVER['HTTP_REFERER'], 'inscription.php'))){
    header("locaton: index.php"); //redirection
    exit(); // ne pas lire la suite
}
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
    <?php include "./_depencies.php"?>
</head>
<body>
    <?php include "./_menu.php"?>
    <h1>Gestion d'utilisateur</h1>
     Bonjour <?="$genre $username vous avez $age ans et vous êtes de $ville"?>
     <a href="test.php">Consulter les cookies</a>
</body>
</html>