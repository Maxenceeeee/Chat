<!DOCTYPE html>
<html>

<head>
  <title>traitement</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="cours.css">
</head>

<body>
  <?php
  $msg = $_REQUEST['msg'];

  $dbname = "chat";
  $dbuser = "root";
  $dbpass = "";
  $dbip = "localhost";

  $bdd = new PDO("mysql:host=" . $dbip . ";dbname=" . $dbname . ";charset=utf8", $dbuser, $dbpass);

  $inscription = $bdd->query('INSERT INTO conversation (messages) VALUES ("' . $msg . '")');

  header('Location: chat.php');

  ?>
</body>

</html>