<?php
// Vérification des informations enregistrées dans la table utilisateur
$pseudo = $_REQUEST['pseudo'];
$email = $_REQUEST['mail'];
$mdp = $_REQUEST['mdp'];

$dbname = "chat";
$dbuser = "root";
$dbpass = "";
$dbip = "localhost";

$bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);

// Exécution de la requête pour vérifier les informations enregistrées
$requete = $bdd->prepare("SELECT * FROM utilisateur WHERE pseudo = :pseudo AND adresseMail = :email AND motDePasse = :mdp");
$requete->bindParam(':pseudo', $pseudo);
$requete->bindParam(':email', $email);
$requete->bindParam(':mdp', $mdp);
$requete->execute();

// Vérification des résultats
if ($requete->rowCount() > 0) {
  header('Location: chat.php');
} else {
  header('Location: connexion.php');

}
?>