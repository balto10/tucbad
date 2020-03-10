<?php
session_start();
// Connexion à la DB

include('includes/inc_config.php');
include('includes/inc_connexion.php');

if(isset($_POST['recup_submit'],$_POST['recup_mail'])) {
   if(!empty($_POST['recup_mail'])) {
     // Formatage
      $recup_mail = htmlspecialchars($_POST['recup_mail']);
      if(filter_var($recup_mail,FILTER_VALIDATE_EMAIL)) {
         $mailexist = $connexion->prepare('SELECT joueur_id FROM joueurs WHERE joueur_mail = ?');
         $mailexist->execute(array($recup_mail));
         $mailexist_count = $mailexist->rowCount();
         // Si UNE correspondance est trouvée alors...
         if($mailexist_count == 1) {
            $_SESSION['recup_mail'] = $recup_mail;
            $recup_mdp = "";
            // Génération d'un nouveau mdp aléatoire
            for($i=0; $i < 8; $i++) {
               $recup_mdp .= mt_rand(0,9);
            }
            $mail_recup_exist = $connexion->prepare('SELECT id FROM recup_mdp WHERE mail = ?');
            $mail_recup_exist->execute(array($recup_mail));
            $mail_recup_exist = $mail_recup_exist->rowCount();
            // Alimentation de la BDD dans la table recup_mdp
            if($mail_recup_exist == 1) {
              // MAJ Du nouveau mdp
               $recup_insert = $connexion->prepare('UPDATE recup_mdp SET mdp = ? WHERE mail = ?');
               $recup_insert->execute(array($recup_mdp,$recup_mail));
            } else {
              // Création d'une nouvelle ligne avec un nouveau mdp
               $recup_insert = $connexion->prepare('INSERT INTO recup_mdp(mail,mdp) VALUES (?, ?)');
               $recup_insert->execute(array($recup_mail,$recup_mdp));
            }
            // Mail qu'on envoie
         $header="MIME-Version: 1.0\r\n";
         $header.='From:"InterclubsTucBad"<yohan.verdalle@gmail.com>'."\n";
         $header.='Content-Type:text/html; charset="utf-8"'."\n";
         $header.='Content-Transfer-Encoding: 8bit';
         $message = '
         <html>
         <head>
           <title>Récupération de mot de passe - InterclubsTUCBAD</title>
           <meta charset="utf-8" />
         </head>
         <body>
           <font color="#303030";>
             <div align="center">
               <table width="600px">
                 <tr>
                   <td>

                     Bonjour, voici votre code de récupération: <b>'.$recup_mdp.'</b>
                     A bientôt sur <a href="http://interclubstucbad.fr">interclubstucbad.fr</a> !

                   </td>
                 </tr>
                 <tr>
                   <td align="center">
                     <font size="2">
                       Ceci est un email automatique, merci de ne pas y répondre
                     </font>
                   </td>
                 </tr>
               </table>
             </div>
           </font>
         </body>
         </html>
         ';
         mail($recup_mail, "Récupération de mot de passe - interclubstucbad.fr", $message, $header);
            header("Location:http://127.0.0.1/site3/renvoi_mdp.php?section=mdp");
         } else {
            $error = "Cette adresse mail n'est pas enregistrée";
         }
      } else {
         $error = "Adresse mail invalide";
      }
   } else {
      $error = "Veuillez entrer votre adresse mail";
   }
}
if(isset($_POST['verif_submit'],$_POST['verif_mdp'])) {
   if(!empty($_POST['verif_mdp'])) {
     // Formatage
      $verif_mdp = htmlspecialchars($_POST['verif_mdp']);
      $verif_req = $connexion->prepare('SELECT id FROM recup_mdp WHERE mail = ? AND mdp = ?');
      $verif_req->execute(array($_SESSION['recup_mail'],$verif_mdp));
      $verif_req = $verif_req->rowCount();
      // Si UNE correspondance est trouvée alors...
      if($verif_req == 1) {
        // Envoi en BDD de la confirmation de la mise en place du MDP provisoire
         $up_req = $connexion->prepare('UPDATE recup_mdp SET confirm_mdp = 1 WHERE mail = ?');
         $up_req->execute(array($_SESSION['recup_mail']));
         header('Location:http://127.0.0.1/site3/renvoi_mdp.php?section=changemdp');
      } else {
         $error = "Code invalide";
      }
   } else {
      $error = "Veuillez entrer votre code de confirmation";
   }
}
if(isset($_POST['change_submit'])) {
   if(isset($_POST['change_mdp'],$_POST['change_mdpc'])) {
      $verif_confirme = $connexion->prepare('SELECT confirm_mdp FROM recup_mdp WHERE mail = ?');
      $verif_confirme->execute(array($_SESSION['recup_mail']));
      $verif_confirme = $verif_confirme->fetch();
      $verif_confirme = $verif_confirme['confirm_mdp'];
      // Si le MDP provisoire matche alors...
      if($verif_confirme == 1) {
        // Contre des injections
         $mdp = htmlspecialchars($_POST['change_mdp']);
         $mdpc = htmlspecialchars($_POST['change_mdpc']);
         if(!empty($mdp) AND !empty($mdpc)) {
           // Si il y a correspondance entre le nouveau mdp et la vérif du nouveau mdp alors....
            if($mdp == $mdpc) {
              // Mise à jour de l'entrée du MDP du joueur
               $ins_mdp = $connexion->prepare('UPDATE joueurs SET joueur_mdp = ? WHERE joueur_mail = ?');
               $ins_mdp->execute(array($mdp,$_SESSION['recup_mail']));
               // Delete dans le même temps de l'entrée du mdp provisoire
              $del_req = $connexion->prepare('DELETE FROM recup_mdp WHERE mail = ?');
              $del_req->execute(array($_SESSION['recup_mail']));
               header('Location:http://127.0.0.1/site3/accueil.php');
            } else {
               $error = "Vos mots de passes ne correspondent pas";
            }
         } else {
            $error = "Veuillez remplir tous les champs";
         }
      } else {
         $error = "Veuillez valider votre mail grâce au code de vérification qui vous a été envoyé par mail";
      }
   } else {
      $error = "Veuillez remplir tous les champs";
   }
}
if(isset($_GET['section'])) {

$section = htmlspecialchars($_GET['section']);

} else {

$section = "";

}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title>Interclubs TUC Badminton</title>
    </head>
    <body>
    <?php
      include('includes/inc_banniere.php');
      include('includes/inc_menu.php'); ?>
      <h4 class="title-element">Récupération de mot de passe</h4>
    <?php if($section == 'mdp') { ?>
    <div class="code_verif">  Un code de vérification vous a été envoyé par mail à: <?= $_SESSION['recup_mail'] ?></div>
    <br/>
    <form method="post" >
       <input type="text" placeholder="Code de vérification" name="verif_mdp"/><br/>
       <input type="submit" value="Valider" name="verif_submit"/>
       <?php if(isset($error)) {
         echo '<div class=errorr>'.$error.'</div>';
         } else {
         echo '';
       } ?>
    </form>

    <?php } elseif($section == "changemdp") { ?>
    <div class="newmdp"> Nouveau mot de passe pour <?= $_SESSION['recup_mail'] ?> </div>

    <form method="post">
       <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
       <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
       <input type="submit" value="Valider" name="change_submit"/>
       <?php if(isset($error)) {
         echo '<div class=errorr>'.$error.'</div>';
         } else {
         echo '';
       } ?>
    </form>
    <?php } else { ?>
    <form method="post" class="renvoi_mot_de_passe">
       <input type="email" placeholder="Votre adresse mail" name="recup_mail"/><br/>
       <input type="submit" value="Valider" name="recup_submit"/>
       <?php if(isset($error)) {
         echo '<div class=errorr>'.$error.'</div>';
         } else {
         echo '';
       } ?>
    </form>
    <?php
    }


      ?>
    <footer>
    <?php include('includes/inc_footer.php'); ?>
    </footer>
   </body>
</html>
