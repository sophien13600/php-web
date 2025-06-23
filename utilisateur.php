<?php

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