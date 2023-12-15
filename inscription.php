<?php
var_dump($_POST);
// Connexion à la base de données
$bdd = new PDO("mysql:host=localhost;dbname=cinemaproject;charset=utf8","root", "");

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    // Préparation et exécution de la requête SQL
    $requete = $bdd->prepare("INSERT INTO user (nom, prenom, age, pays, ville, rue, cp, email, mdp, tel) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $requete->execute(
        array(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["Age"],
            $_POST["Pays"],
            $_POST['Ville'],
            $_POST['Rue'],
            $_POST['CodePostal'],
            $_POST["mail"],
            $_POST["password"],
            $_POST["Telephone"]
        )
    );
    
    // Vérification de l'insertion
    $result = $requete->rowCount();
    if ($result > 0) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur lors de l'inscription";
    }
}
?>
