<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once"./_depencies.php"?>
    <title>Home page</title>
</head>
<body>
    <?php
        require"./_menu.php";
    ?>
    <h1 class= "text-primary">Page d'accueil</h1>
<p>Bienvenue dans notre application <strong>PHP</strong></p>
   <a href="utilisateur.php?username=Mitroglu&ville=Marseille&age=55">
        Connaitre un peu plus la légende ?
   </a> 
</body>

</html>