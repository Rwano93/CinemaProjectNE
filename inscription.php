<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=erwan_site;charset=utf8', 'root', '');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["Age"]; // Si vous ne l'utilisez pas, vous pouvez le retirer
    $metier = $_POST["metier"];
    $pays = $_POST["Pays"];
    $email = $_POST["mail"];
    $password = ($_POST["password"]);

    // Préparation et exécution de la requête SQL
    $requete = $bdd->prepare("INSERT INTO user (nom, prenom, metier, Pays, email, mdp) VALUES (?, ?, ?, ?, ?, ?)");
    $requete->execute([$nom, $prenom, $metier, $pays, $email, $password]);

    // Vérification de l'insertion
    $result = $requete->rowCount();
    if ($result > 0) {
        echo "Inscription réussie!";
    } else {
        echo "Erreur lors de l'inscription";
    }
}
?>
