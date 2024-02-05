<!DOCTYPE html>
<html>

<head>
  <title>traitement</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="cours.css">
</head>

<body>
  <?php
  $nom = $_REQUEST['nom'];
  $prenom = $_REQUEST['prenom'];
  $pseudo = $_REQUEST['pseudo'];
  $email = $_REQUEST['mail'];
  $mdp = $_REQUEST['mdp'];

  $dbname = "chat";
  $dbuser = "root";
  $dbpass = "";
  $dbip = "localhost";

  $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);

  $inscription = $bdd->query('INSERT INTO utilisateur (nom, prenom, pseudo, motDePasse, adresseMail) VALUES ("' . $nom . '", "' . $prenom . '", "' . $pseudo . '", "' . $mdp . '", "' . $email . '")');

  header('Location: chat.php');

  ?>
</body>

</html>