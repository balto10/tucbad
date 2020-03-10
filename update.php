<?php

// Démarrage de SESSION
  session_start();

// Connexion à la DB

include('includes/inc_config.php');
include('includes/inc_connexion.php');


// FORMATAGE

$prenom = mb_strtolower($_SESSION['prenom']);
$nom = mb_strtolower($_SESSION['nom']);
// ########## Réception de la photo
// Test d'existence
if (isset($_FILES['photo'])) {
  // Test de poids
  if ($_FILES['photo']['size'] <= 500000) {
    // Test du type
    if (($_FILES['photo']['type']=='image/jpg') || ($_FILES['photo']['type']=='image/jpeg')) {
      // Tout est bon, on déplace le fichier
      move_uploaded_file($_FILES['photo']['tmp_name'], 'photos/'.$prenom.'_'.$nom.'.jpg');
      // On redirige l'utilisateur vers la page d'accueil
    } else {
      // ERREUR : Format de fichier incorrect
      echo 'Format de fichier incorrect';
    }
  } else {
    // Poids incorrect
    echo 'La photo est trop lourde.';
  }
} else {
}
// Préparation de la requête

$requete = "UPDATE joueurs SET joueur_prefere=:pref, joueur_tableau=:tableau WHERE joueur_id=".$_SESSION['id'];

$modele = $connexion -> prepare($requete);

// Insertion des données

$modele -> BindValue('pref', $_POST['pref']);
$modele -> BindValue('tableau', $_POST['tableau']);

// Envoi de la requête



if ($modele -> execute()) {

// Si tout est OK, retour sur le profil
header('Location: profile.php');

  }
  else {
}
?>
