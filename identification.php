<?php

// Chargement des fonctions
  include('includes/inc_fonctions.php');

// Démarrage de SESSION
  session_start();

// Récupération des données brutes
  if ((!empty($_POST['mail'])) && (!empty($_POST['mdp']))) {
    // Formatage des entrées (sécurisation)
    $mail = htmlentities(trim($_POST['mail']));
    $mdp = htmlentities(trim($_POST['mdp']));
  } else {
    // Retour sur la page d'accueil
    header('Location:index.php');
  }

// ########## TEST de l'identité ##########

// CONNEXION
include('includes/inc_config.php');
include('includes/inc_connexion.php');

// Préparation de la requête
$requete = 'SELECT * FROM joueurs WHERE joueur_mail="'.$mail.'" AND joueur_mdp="'.$mdp.'" LIMIT 1';

// Objet contenant la réponse
$resultat = $connexion->query($requete);

// Extraction des informations de cet objet
if ($tab_ligne = $resultat->fetch(PDO::FETCH_ASSOC)) {

  // Enregistrement en SESSION
  $_SESSION['id'] = $tab_ligne['joueur_id'];
  $_SESSION['ident'] = ucfirst($tab_ligne['joueur_prenom']).' '.ucfirst($tab_ligne['joueur_nom']).' '.($tab_ligne['joueur_mail']);
  $_SESSION['prenom'] = $tab_ligne['joueur_prenom'];
  $_SESSION['nom'] = $tab_ligne['joueur_nom'];
  $_SESSION['licence'] = $tab_ligne['joueur_licence'];
  $_SESSION['mdp'] = $tab_ligne['joueur_mdp'];

  // Fermeture de connexion
  include('includes/inc_deconnexion.php');

  // Redirection vers la page de profil
  header('Location:profile.php');

} else {

  // Retour sur la page d'accueil
  header('Location:connexion.php');
}

 ?>
