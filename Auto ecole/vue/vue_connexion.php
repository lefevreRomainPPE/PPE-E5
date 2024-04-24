<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <style>
        body {
            background-color: #f0f0f0; /* Gris clair */
            font-family: Arial, sans-serif; /* Utilisation d'une police de caractères */
        }
        /* Style pour le formulaire */
        form {
            margin: 0 auto; /* Centrer le formulaire horizontalement */
            width: 400px; /* Largeur du formulaire */
            padding: 20px; /* Espacement intérieur du formulaire */
            background-color: #ffffff; /* Fond blanc du formulaire */
            border-radius: 10px; /* Coins arrondis du formulaire */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Ombre légère prise sur internet*/
        }
        /* Style pour les éléments de formulaire */
        input[type="text"],
        input[type="password"],
        input[type="reset"],
        input[type="submit"] {
            width: 100%; /* Remplir complètement la largeur du conteneur */
            padding: 10px; /* Espacement intérieur */
            margin-bottom: 15px; /* Espacement en bas de chaque élément */
            border: 1px solid #ccc; /* Bordure grise */
            border-radius: 5px; /* Coins arrondis */
            box-sizing: border-box; /* Inclure le padding et la bordure dans la largeur/hauteur */
        }
        input[type="reset"],
        input[type="submit"] {
            background-color: #007bff; /* Couleur de fond */
            color: #ffffff; /* Couleur du texte */
            cursor: pointer; /* Curseur de la souris */
            border: none; /* Supprimer la bordure */
        }
        input[type="reset"]:hover,
        input[type="submit"]:hover {
            background-color: #0056b3; /* Couleur de fond au survol */
        }

        td{
            color: black;
        }
    </style>
</head>
<body>
    <br><br>
    <img src="img/voiture.jpg" height="400" width="400">
    <br><br>
    <h3>Castelane Connexion</h3>
    <br><br>
    <form method="post">
        <table>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>MDP</td>
                <td><input type="password" name="mdp"></td>
            </tr>
            <tr> 
                <td> <input type="reset" name="Annuler" value="Annuler">
                <input type="submit" name="Connexion" value="Connexion"></td>
            </tr> 
        </table>
    </form>
</body>
</html>
