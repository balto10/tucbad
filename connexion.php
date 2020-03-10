<?php
  session_start();
  if (isset($_GET['logout'])) {
    unset($_SESSION['id']);
    unset($_SESSION['ident']);
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/mdp.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function(){
        form_verifTxt('profil',['mail', 'mdp']);
      });
    </script>
    <title>Connexion </title>
  </head>
  <body>
    <div class="banniere">
      <div class="connexion"><a href="connexion.php"> CONNEXION </a></div>
      <div class="logo"> </div>
    </div>
    <nav>
      <?php include('includes/inc_menu.php'); ?>
    </nav>
    <form action="identification.php" name="profil" method="post" class="form_connexion">
      <h3>IDENTIFICATION</h3>
      <input type="email" name="mail" placeholder="EMAIL" value="">
      <input type="password" name="mdp" placeholder="MOT DE PASSE" value="">
      <input type="submit" value="Connecter" name="connecter">
      <p> Mot de passe oublié? <a href="renvoi_mdp.php">Cliquez ici</a> pour
        renvoyer le mot de passe </p>
    </form>
    <div class="verifco">
    <?php
    $msg1 = '';
    $msg2 = '';
    if (isset($_POST['connecter'])) {
      if (!empty($_POST['mail']) && (!empty($_POST['mdp']))) {
      $msg1 = "Il y a eu une erreur dans un des champs.";
    }
    else {
      $msg2 = "Un champ n'a pas été rempli";
    }
}
echo $msg1.' '.$msg2;
    ?>
  </div>
    <div id="popup">
      <section></section>
    </div>
    <footer>
      <?php include('includes/inc_footer.php'); ?>
    </footer>
  </body>
</html>
