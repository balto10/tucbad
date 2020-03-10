<?php

  include('includes/inc_fonctions.php');
  // Connexion à la DB
  include('includes/inc_config.php');
  include('includes/inc_connexion.php');

  // Chargement de la classe Profil
  include('class/Profil.class.php');

  // Mise en place de la bannière
  include('includes/inc_banniere.php');
  include('includes/inc_menu.php');

  if (isset($_POST['envoi'])) {
    if (!empty($_POST['mail']) && (!empty($_POST['message'])) && (!empty($_POST['nom']))) {

      $header="MIME-VERSION: 1.0\r\n";
      $header.='From:"Yohan"<yohan.verdalle@gmail.com>'."\n";
      $header.='Content-Type:text/html; charset="utf-8"'."\n";
      $header.='Content-Transfer-Encoding: 8bit';
      $message='
        <html>
          <body>
            <div align="center">
                <u> Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
                <u> Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                '.nl2br($_POST['message']).'
                <br />
            </div>
          </body>
        </html>
        ';
          mail("yohan.verdalle@gmail.com", "Contact - Turcbad.org", $message, $header);
          $reponse='Votre message a bien été envoyé !';
      }
      else
      {
        $reponse='Tous les champs ne sont pas remplis!';
      }
    }

?>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Contact TUCbad</title>
  </head>
  <body>
    <h2> Formulaire de contact </h2>
      <form action="" name="contact" method="post" class="form_contact">
        <input type="text" name="nom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom'];} ?>">
        <input type="email" name="mail" placeholder="Entrez votre e-mail..." value="<?php if(isset($_POST['mail'])) { echo $_POST['mail'];} ?>">
        <textarea name="message" placeholder="Saisissez ici votre message" rows="10"><?php if(isset($_POST['message'])) { echo $_POST['message'];} ?></textarea>
        <input type="submit" value="Envoyer un mail" name="envoi">
      </form>
      <p> Pour plus d'informations, vous pouvez consulter<a href="https://www.tucbad.org/">LE SITE OFFICIEL</a>
 du TUC Badminton. </p>

      <?php
  // Affichage du message pour l'utilisateur
  if(isset($reponse))
  {
  echo '<div class="champs" style="color:blue";>'.$reponse.'</div>';
  }

include('includes/inc_footer.php'); ?>
<br/>
<br/>
<br/>
<br/>

</body>

</html>
