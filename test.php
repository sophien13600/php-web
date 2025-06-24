<?php
session_start();

$nom_c="";
$nom_s="";
if(isset($_COOKIE['nom'])){
    $nom_c = $_COOKIE['nom'];
}
if(isset($_SESSION['nom'])){
    $nom_s = $_SESSION['nom'];
}


//var_dump($_SERVER);
if(str_contains($_SERVER['HTTP_REFERER'],'test.php')){

session_unset();//supprimer toutes les variables session
session_destroy();
$nom_c="";
$nom_s="";
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cookies</h1>
    <p>Nom: <?=$_COOKIE['nom']?></p>
    <p>Nom: <?=$nom_c?></p>
    <h2>Session</h2>
    <p>Nom: <?= $nom_s?></p>
    <p>
        <a href="test.php">Vider la session</a>
    </p>
</body>
</html>