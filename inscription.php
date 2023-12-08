<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=cinemaprojetc;charset=utf8', 'root', '');

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"]; // Si vous ne l'utilisez pas, vous pouvez le retirer
    $pays = $_POST["pays"];
    $ville = $_POST['ville'];
    $rue = $_POST['rue'];
    $cp = $_POST['cp'];
    $email = $_POST["mail"];
    $password = ($_POST["password"]);
    $tel = $_POST["tel"];

    // Préparation et exécution de la requête SQL
    $requete = $bdd->prepare("INSERT INTO user (nom, prenom, age, pays, ville, rue, cp, email, mdp, tel) VALUES (?,?,?,?,?,?,?,?,?,?)");
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
