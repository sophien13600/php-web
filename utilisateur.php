<?php

$username = "Doe";
if ($_GET['username'] != "") {
    $username = $_GET['username'];
}
$genre ="Monsieur";
if(isset ($_GET['genre']) and $_GET['genre'] =='femme'){
    
$genre = "Madame";
}

$age = $_GET['age'];
$ville = $_GET['ville'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisateur</title>
</head>
<body>
    <h1>Gestion d'utilisateur</h1>
    Bonjour <?php echo"$genre $username vous avez $age et êtes de $ville"?>
</body>
</html>