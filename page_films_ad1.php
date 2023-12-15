<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
</head>
<body>
    <link rel="stylesheet" href="style.css">
    <h1>Listes des films </h1>
    <form action="page_films_ad1.php" method="post">
        <label for="film">Choisissez un film</label>
        <select>
            <?php
            $bdd = new PDO('mysql:host=localhost;dbname=cinemaproject;charset=utf8', 'root', '');
            $reponse = $bdd->query('SELECT titre, auteur, date_sortie FROM film');
            while ($donnees = $reponse->fetch()){
                echo '<option value="' . $donnees['titre'] . '">' . $donnees['titre'] . ' ' . $donnees['auteur'] . ' ' . $donnees['date_sortie'] . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Envoyer" />
    </form>
    
</body>
</html>
