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
      <title>Profil de <?= $_SESSION['prenom'].' '.$_SESSION['nom'] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <script> <?php echo "let joueur_licence=".$_SESSION['licence']; ?></script>
    <script src="js/api.js"></script>

  </head>
  <body>
    <?php

    include('includes/inc_banniere.php');
    // Mise en place du menu
    include('includes/inc_menu.php');

    $profil = new Profil($connexion);
    $resultats = $profil -> listing();

// Parcours du tableau
    foreach($resultats as $tab_ligne)

    if ($_SESSION['id']==$tab_ligne['joueur_id']) {
// Affichage des résultats du joueur en session
      // echo $tab_ligne['joueur_id'].' '.$tab_ligne['joueur_nom'].' '.
      // $tab_ligne['joueur_prenom'].' '.$tab_ligne['gen_nom'].' '.
      // $tab_ligne['equipe_nom'].' '.$tab_ligne['stat_nom'].' '.$tab_ligne['joueur_licence'].' '.
      // $tab_ligne['joueur_mail'].' '.$tab_ligne['joueur_tableau'].' '.$tab_ligne['joueur_mdp'].' '.$tab_ligne['joueur_licence'];

    echo '<div class="cadre_profil"><div class="modifiable">';
    echo '<form action=update.php name="fiche" method="post" class="profil" enctype="multipart/form-data">';
    echo '<label for="photo"><em>Changez votre photo de profil :</em> (500ko max et en .jpg)</label>';
    echo '<input type="file" name="photo" id="photo" value=""></br>';
    echo '<em>Tableau préféré : </em>';
    echo '<span class="radio"><em> Simple </em></span><input type="radio" name="tableau" value="1"';
    //  Coche la bonne case 
    if ($tab_ligne['joueur_tableau']=='1') {
      echo ' checked';
    };
    echo '><span class="radio"><em> Double </em></span><input type="radio" name="tableau" value="2"';
    if ($tab_ligne['joueur_tableau']=='2') {
      echo ' checked';
    };
    echo '><span class="radio"><em> Mixte </em></span><input type="radio" name="tableau" value="3"';
    if ($tab_ligne['joueur_tableau']=='3') {
      echo ' checked';
    };


    echo '><br> <em>Joueur/Joueuse préféré(e) : </em><input type="text" name="pref" placeholder="Joueur préféré..." value="'.$tab_ligne['joueur_prefere'].'"></br>';
    echo '<a href="change_mdp.php">Pour changer ton mot de passe, clique-ici !</a>';
    echo '<div class="succes_echec">';
    if (isset($_GET['reussi'])) {
      echo '<div class="yess">Votre mot de passe a été changé avec succès</div>';
    }
    if (isset($_GET['notidentic'])) {
      echo "Votre mot de passe n'a pas été changé parce que vous n'avez pas rentré deux nouveaux mots de passes identique.";
    }
    if (isset($_GET['error'])) {
      echo "Votre mot de passe n'a pas été changé parce que vous avez saisi une erreur dans l'ancien mot de passe.";
    }
    if (isset($_GET['oubli'])) {
      echo "Votre mot de passe n'a pas été changé parce qu'un champ est resté vide.";
    }
    echo '</div>';
    echo '<input type="submit" value="EDITER"></form></div>';
    echo '<div class="dashed"><div class="forme"><div class="mail_profile"><em> Mail </em>: <span>'.$tab_ligne['joueur_mail'].'</span></div>';
    echo '<div class="licence_profile"> <em> Numéro de licence : </em><div class="licence_profile2"><span>'.$tab_ligne['joueur_licence'].'</span></div></div>';
    echo '<div class="classement_profil">CLASSEMENTS*<div id="classement_profile"></div><span class="legende">*Simple / Double / Mixte</div></div></div></div>';
  }


    include('includes/inc_footer.php');

    ?>

  </body>
</html>
