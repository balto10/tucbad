<?php
// Démarrage de SESSION
  session_start();

// TEST de variable de SESSION (Sécurisation de la page)
 if (empty($_SESSION['ident'])){
   header('Location:index.php');
 } else {
   include('includes/inc_fonctions.php');
   // Connexion à la DB
   include('includes/inc_config.php');
   include('includes/inc_connexion.php');

   // Chargement de la classe Profil
   include('class/Profil.class.php');
 }

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Profil de <?= $_SESSION['prenom'].' '.$_SESSION['nom'] ?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php

    include('includes/inc_banniere.php');
    // Mise en place du menu
    include('includes/inc_menu.php');

    ?>

    <form action=traitement_mdp.php name="mdp" method="post" class="motdepasse">
    <em> Ancien mot de passe : </em>
    <input type="password" name="amdp" placeholder="******" value=""><br></input>
    <em> Nouveau mot de passe : </em>
    <input type="password" name="nmdp" placeholder="******" value=""><br></input>
    <em> Nouveau mot de passe : </em>
    <input type="password" name="vmdp" placeholder="******" value=""><br></input>
    <input type="submit" value="EDITER"></form>

    <?php

    include('includes/inc_footer.php');

    ?>

  </body>
</html>
