<?php

    // Chargement de la classe Profil
    include('class/Profil.class.php');
    include('includes/inc_fonctions.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Interclubs TUC Badminton</title>
  </head>
</body>
  <main>
<?php
include('includes/inc_banniere.php');
// Mise en place du menu
include('includes/inc_menu.php');
?>
    <div class="equipess">
      <div class="premiere_partie">
        <div class="equipe1">
          <a href="equipes/equipe_1.php"> EQUIPE 1 </a>
          <img src="photos/equipe1.jpg">
        </div>
        <div class="equipe2">
          <a href="equipes/equipe_2.php"> EQUIPE 2 </a>
          <img src="photos/equipe2.jpg">
        </div>
        <div class="equipe3">
          <a href="equipes/equipe_3.php"> EQUIPE 3 </a>
          <img src="photos/equipe3.jpg">
        </div>
      </div>
      <div class="deuxieme_partie">
        <div class="equipe4">
          <a href="equipes/equipe_4.php"> EQUIPE 4 </a>
          <img src="photos/equipe4.jpg">
        </div>
        <div class="equipe5">
          <a href="equipes/equipe_5.php"> EQUIPE 5 </a>
          <img src="photos/equipe5.jpg">
        </div>
      </div>
      <div class="troisieme_partie">
        <div class="equipe6">
          <a href="equipes/equipe_6.php"> EQUIPE 6 </a>
          <img src="photos/equipe6.jpg">
        </div>
        <div class="equipe7">
          <a href="equipes/equipe_7.php"> EQUIPE 7 </a>
          <img src="photos/equipe7.jpg">
        </div>
      </div>
    </div>
  </main>
<?php
include('includes/inc_footer.php'); ?>
</body>
</html>
