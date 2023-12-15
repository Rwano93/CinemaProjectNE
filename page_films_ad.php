
<?php
$bdd = new PDO('mysql:host=localhost;dbname=cinemaproject;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT titre, auteur, date_sortie FROM film');
while ($donnees = $reponse->fetch()){
    echo '<p>' . $donnees['titre'] . ' ' . $donnees['auteur'] . ' ' . $donnees['date_sortie'] . '</p>';
}

//Afficher le film au complet 

?>
