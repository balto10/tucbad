<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/equipes.css" />
    <title>Interclubs TUC Badminton</title>
  </head>
  <body>

<?php
include('../includes/inc_banniere_equipes.php');
include('../includes/inc_menu_equipes.php');
include('../includes/inc_config.php');
include('../includes/inc_connexion.php');




?>

    <h1><p> EQUIPE 2 </p></h1>
    <h2> Départementale 2 </h2>

    <div class="photo_active"> <img src="../photos/equipe2.jpg" alt="photo d'équipe 2"> </div>
      <div class="mise_en_page">
        <div class="tableaux">
          <div class="tableauH">
            <table>
              <caption> Joueurs </caption>
              <thead>
                <tr>
                  <th>Licence</th>
                  <th>Nom</th>
                  <th>Classements</th>
                </tr>
              </thead>
              <tbody>

              <?php

              // Préparation de la requête
              $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=2 AND joueur_genre=1';

              // Objet contenant la réponse
              $resultats = $connexion->query($requete);

              // Extraction des informations de cet objet
              foreach ($resultats as $cle => $element) {
                echo '<tr><td>'.$element['joueur_licence'].' </td><td> '.$element['joueur_prenom'].' '.$element['joueur_nom']. '</td><td> '.$element['joueur_classement'].'</td></tr>';
              }
              ?>
              </tbody>
            </table>
          </div>
            <div class="tableauD">
              <table>
                <caption> Joueuses </caption>
                <thead>
                  <tr>
                    <th>Licence</th>
                    <th>Nom</th>
                    <th>Classements</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              // Préparation de la requête
              $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=2 AND joueur_genre=2';

              // Objet contenant la réponse
              $resultats = $connexion->query($requete);

              // Extraction des informations de cet objet
              foreach ($resultats as $cle => $element) {
                echo '<tr><td>'.$element['joueur_licence'].' </td><td> '.$element['joueur_prenom'].' '.$element['joueur_nom']. '</td><td> '.$element['joueur_classement'].'</td></tr>';
              };

            ?>

                </tbody>
              </table>
        <p class="legende"> *Simple / Double / Mixte </p>
      </div>
    </div>
  </div>

<?php // Initialisation

$TUC = 'Toulouse Université Club Badminton 2 (TUCB2)';
$BCG = 'Badminton Club Grenadin 1 (BCG1)';
$BCT = 'Bc Tournefeuille 4 (BCT4)';
$SOBAD = 'Saint-Orens Badminton 3 (SOBAD3)';
$BBC = 'Blagnac Badminton Club 4 (BBC4)';
$SJBC = 'Saint Jean Badminton Club 1 (SJBC1)';

?>
<br/>
<br/>

  <div class="rencontres">
    <table>
        <tbody>
          <tr>
            <td>J1</td>
            <td>19/10/2018</td>
            <td><?=$BCG?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106043&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J2</td>
            <td>21/11/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$SJBC?></td>
            <td><span class="lose">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106048&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J3</td>
            <td>07/12/2018</td>
            <td><?=$BCT?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106049&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J4</td>
            <td>14/12/2018</td>
            <td><?=$SOBAD?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="egalite">3/3</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106053&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J5</td>
            <td>18/01/2019</td>
            <td><?=$BBC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106057&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J6</td>
            <td>30/01/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BCG?></td>
            <td><span class="win">4/3</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106059&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J7</td>
            <td>15/02/2019</td>
            <td><?=$SJBC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="lose">5/2</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106063&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J8</td>
            <td>13/03/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BCT?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106066&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J9</td>
            <td>27/03/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$SOBAD?></td>
            <td><span class="lose">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106067&id=ic_1557757468138&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J10</td>
            <td>10/04/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BBC?></td>
            <td><span class="lose">0/7</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106072&id=ic_1557757468139&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="classement">
      <table>
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th>Pts</th>
            <th>J</th>
            <th>G</th>
            <th>E</th>
            <th>P</th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><?=$SJBC?></td>
              <td>26</td>
              <td>10</td>
              <td>8</td>
              <td>0</td>
              <td>2</td>
            </tr>
            <tr>
              <td>2</td>
              <td><?=$SOBAD?></td>
              <td>25</td>
              <td>10</td>
              <td>7</td>
              <td>1</td>
              <td>2</td>
            </tr>
            <tr>
              <td>3</td>
              <td><span class="win"><?=$TUC?></span></td>
              <td>21</td>
              <td>10</td>
              <td>5</td>
              <td>1</td>
              <td>4</td>
            </tr>
            <tr>
              <td>4</td>
              <td><?=$BBC?></td>
              <td>20</td>
              <td>10</td>
              <td>5</td>
              <td>0</td>
              <td>5</td>
            </tr>
            <tr>
              <td>5</td>
              <td><?=$BCG?></td>
              <td>18</td>
              <td>10</td>
              <td>4</td>
              <td>0</td>
              <td>6</td>
            </tr>
            <tr>
              <td>6</td>
              <td><?=$BCT?></td>
              <td>10</td>
              <td>10</td>
              <td>0</td>
              <td>0</td>
              <td>10</td>
            </tr>
          </tbody>
        </table>
      </div>
    <?php
    include('../includes/inc_deconnexion.php');
    include('../includes/inc_footer.php');
    ?>
  </body>
</html>
