<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style2.css" />
   <title>Chat</title>
</head>

<body>

   <div class="partie1">

      <h2> CONNEXION </h2>
      <br>
      <form action="traitementconnexion.php" method="post" id="connection">

         <div class="Petitbloc">
            <label for="pseudo">Pseudo </label>
            <input type="text" id="pseudo" name="pseudo" />
         </div>

         <div class="Petitbloc">
            <label for="mail">E-mail</label>
            <input type="email" id="mail" name="mail" />
         </div>

         <div class="Petitbloc">
            <label for="mdp">Mot de passe </label>
            <input type="password" id="mdp" name="mdp" />
         </div>

         <button type="submit"> connecte toi </button>

      </form>
   </div>
   <script>
      document.getElementById('inscription').addEventListener('submit', function (event) {
         var pseudo = document.getElementById('pseudo').value;
         var mail = document.getElementById('mail').value;
         var mdp = document.getElementById('mdp').value;

         if (pseudo === '' || mail === '' || mdp === '') {
            alert('Veuillez remplir tous les champs du formulaire.');
            event.preventDefault();
         }
      });

   </script>
</body>