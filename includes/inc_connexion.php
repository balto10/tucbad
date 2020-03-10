<?php

// Ouverture de la connexion
try {
  $connexion = new PDO(DSN, USER, MDP);
  $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $erreur) {
  exit("Outch, erreur : ".$erreur -> getMessage());
}

?>
