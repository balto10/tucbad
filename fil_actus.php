<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Interclubs TUC Badminton</title>
  </head>
  <body>
    <?php
    include('includes/inc_banniere.php');
    include('includes/inc_menu.php');
    include('includes/inc_config.php');
    include('includes/inc_connexion.php');
    include('includes/inc_deconnexion.php');
    include('includes/inc_footer.php')
    ?>

  <div class="construct">
    <p> Youtube </p>
  </div>
  <p> <iframe width="560" height="315" src="https://www.youtube.com/embed/juWpnCJ0xtU?&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </p>
  </body>
</html>
