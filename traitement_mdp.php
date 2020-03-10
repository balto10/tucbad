<?php

// Démarrage de SESSION
  session_start();

// Connexion à la DB

include('includes/inc_config.php');
include('includes/inc_connexion.php');

// Ecriture de la requête (UPDATE)

$requete = "UPDATE joueurs SET joueur_mdp=:vmdp WHERE joueur_id=".$_SESSION['id'];

// Préparation de la requête

$modele = $connexion -> prepare($requete);

// Préparation des variables

$amdp=$_POST['amdp'];
$nmdp=$_POST['nmdp'];
$vmdp=$_POST['vmdp'];

// Vérification et insertion des données
if (($amdp!='')&&($nmdp!='')&&($vmdp!='')) {
  if ($amdp==$_SESSION['mdp']){
    if($nmdp==$vmdp){
      $modele -> BindValue('vmdp', $_POST['vmdp']);
      $modele -> execute();
      $_SESSION['mdp']=$vmdp;
      header('Location: profile.php?reussi');
    }
    else {
      header('Location: profile.php?notidentic');
  // echo "Vous n'avez pas rentré deux nouveaux mots de passes identique.";
      }
    }
  else {
    header('Location: profile.php?error');
    // echo "Erreur dans l'ancien mot de passe ";
  }
}
else {
  header('Location: profile.php?oubli');
  // echo "Un champ est vide.";
}

  // Envoi de la requête

  // Si tout est OK, retour sur le profil


?>
