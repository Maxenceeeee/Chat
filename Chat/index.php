<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css" />
   <title>Chat</title>
</head>

<body>

   <div class="partie1">

      <h2> INSCRIPTION </h2>
      <br>
      <form action="traitement.php" method="post" id="inscription">
         <ul>
            <div class="Petitbloc">
               <label for="nom">Nom</label>
               <input type="text" id="nom" name="nom" />
            </div>
            <br>
            <br>
            <div class="Petitbloc">
               <label for="prenom">Prénom</label>
               <input type="text" id="prenom" name="prenom" />
            </div>
            <br>
            <br>
            <div class="Petitbloc">
               <label for="pseudo">Pseudo </label>
               <input type="text" id="pseudo" name="pseudo" />
            </div>
            <br>
            <br>
            <div class="Petitbloc">
               <label for="mail">E-mail</label>
               <input type="email" id="mail" name="mail" />
            </div>
            <br>
            <br>
            <div class="Petitbloc">
               <label for="mdp">Mot de passe </label>
               <input type="password" id="mdp" name="mdp" />
            </div>
            <br>
            <br>
         </ul>
         <button class="btn" type="submit">S'inscrire</button>
         <br />
         <button class="btn" type="submit"><a href="connexion.php">Déjà enregistré ? Connectez vous !</a></button>
      </form>
      </div>
      <br>

</body>

</html>