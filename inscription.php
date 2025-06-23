<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Page d'inscription</h1>
        <form action="utilisateur.php" method="post">
            <fieldset>
                <legend>Données de connexion</legend>

            <div>
                <label for="username">Nom d'utilisateur</label>
                <input name ="username" id ="username" type="text" autocomplete="off" autofocus>
            </div>
             <div>
                <label for="password">Mot de passe</label>
                <input name ="password" id ="password" type="password">
            </div>
            </fieldset>
            <div>
             <div>
                <label for="age">Age</label>
                <input name="age" id ="age" type="number" min=0 max= 150>
            </div>
            <div>
                <label for="ville">Ville</label>
                <select name ="ville" id="ville">
                    <option value="" selected disabled>Merci de choisir votre ville</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon" >Lyon</option>
                    <option value="Paris">Paris</option>
                </select>
            </div>
            <div>
                <label for="remarque">Remarque</label>
                <textarea name= "remarque" id ="remarque" cols="50" rows="5" ></textarea>
            </div>
            <div>
                Genre
                <input type="radio"  name="genre" value =homme>Homme
                <input type="radio" name="genre" value = femme>Femme
            </div>
            
            <div>
                Sport préféré
                <input type="checkbox" name="sport1" value = football>Football
                <input type="checkbox" name="sport2" value = handball>Handball
                <input type="checkbox" name="sport3" value = tennis>Tennis
            </div>
            <button>
                S'inscrire
            </button>

        </form>
</body>
</html>