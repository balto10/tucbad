<?php

// FORMATAGE



if (!empty($_SESSION['ident'])) {
  $filename='photos/'.mb_strtolower($_SESSION['prenom']).'_'.mb_strtolower($_SESSION['nom']).'.jpg';
  echo '<div class="banniere">';
  echo '<div class="photo_profil"><a href="profile.php">';
  if (file_exists($filename)) {
  echo '<img src="photos/'.mb_strtolower($_SESSION['prenom']).'_'.mb_strtolower($_SESSION['nom']).'.jpg">';
}
  echo '</a></div><div class="deconnexion"><a href="index.php?logout"> DECONNEXION </a></div>';
  echo '<div class="logo"> </div></div>';
} else {
  echo '<div class="banniere">';
  echo '<div class="connexion"><a href="connexion.php"> CONNEXION </a></div>';
  echo '<div class="logo"> </div></div>';
}
