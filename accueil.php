<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet"  href="css/style.css" />
        <title>Interclubs TUC Badminton</title>
    </head>
    <body>
      <?php
      include('includes/inc_banniere.php');
      include('includes/inc_menu.php');
      ?>
      <article>
        <h1> Bienvenue sur le site dédié aux interclubs du TUC Badminton </h1>
        <div class="bienvenue">
          <p class="text"> Vous pourrez retrouver sur ce site les dernières actualités du club,
        les effectifs, résultats et classements de chacune de nos équipes. Enfin,
        ce site permettra aux équipes d'organiser leurs interclubs via des sondages
        et un fil de discussion.
          </p>
          <h2> Allez le TUC!! </h2>
        </div>
      </article>
      <footer>
        <?php include('includes/inc_footer.php') ?>
      </footer>
   </body>
</html>
