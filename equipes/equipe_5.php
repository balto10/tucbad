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

    <h1><p> EQUIPE 5 </p></h1>
    <h2> Départementale 4 - poule A</h2>

    <div class="photo_active"> <img src="../photos/equipe5.jpg" alt="photo d'équipe 5"> </div>
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
                    $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=5 AND joueur_genre=1';

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
                    $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=5 AND joueur_genre=2';

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

      $TUC = 'Toulouse Université Club Badminton 5 (TUCB5)';
      $OBC = 'Olympe Badminton Club 1 (OBC1)';
      $BF = 'Bad\'in Fenouillet 1 (BF1)';
      $VSM = 'Volant Saint Matin 1 (VSM1)';
      $ASTMB = 'A.s. Toulouse Mirail Badminton 1 (ASTMB1)';
      $BBC = 'Blagnac Badminton Club 7 (BBC7)';
      $ASEAT = 'As Centre d\'Essais Aeronautique 2 (ASEAT2)';
      $VCT = 'Volant Club Toulousain 8 (VCT8)';
      $SJBC = 'Saint Jean Badminton Club 4 (SJBC4)';
      $FCB = 'Les Bauzibads 2 (FCB2)';
      ?>
      <br/>
      <br/>

        <div class="rencontres">
          <table>
              <tbody>
                <tr>
                  <td>J1</td>
                  <td>07/11/2018</td>
                  <td><?=$TUC?></td>
                  <td> - </td>
                  <td><?=$BF?></td>
                  <td><span class="win">6/1</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106230&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J2</td>
                  <td>13/11/2018</td>
                  <td><?=$VSM?></td>
                  <td> - </td>
                  <td><?=$TUC?></td>
                  <td><span class="win">2/5</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110110&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J3</td>
                  <td>27/11/2018</td>
                  <td><?=$ASTMB?></td>
                  <td> - </td>
                  <td><?=$TUC?></td>
                  <td><span class="win">2/5</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106227&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J4</td>
                  <td>10/12/2018</td>
                  <td><?=$TUC?></td>
                  <td> - </td>
                  <td><?=$OBC?></td>
                  <td><span class="win">5/2</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106232&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J5</td>
                  <td>18/01/2019</td>
                  <td><?=$BBC?></td>
                  <td> - </td>
                  <td><?=$TUC?></td>
                  <td><span class="win">2/5</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106237&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J6</td>
                  <td>30/01/2019</td>
                  <td><?=$TUC?></td>
                  <td> - </td>
                  <td><?=$ASEAT?></td>
                  <td><span class="win">5/2</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106226&id=ic_1557759730032&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J7</td>
                  <td>15/02/2019</td>
                  <td><?=$VCT?></td>
                  <td> - </td>
                  <td><?=$TUC?></td>
                  <td><span class="lose">4/3</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110102&id=ic_1557759730033&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J8</td>
                  <td>18/03/2019</td>
                  <td><?=$SJBC?></td>
                  <td> - </td>
                  <td><?=$TUC?></td>
                  <td><span class="win">2/5</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106236&id=ic_1557759730033&ic_ajax=1" target="_blank">Feuille de match</a></td>
                </tr>
                <tr>
                  <td>J9</td>
                  <td>27/03/2019</td>
                  <td><?=$TUC?></td>
                  <td> - </td>
                  <td><?=$FCB?></td>
                  <td><span class="win">7/0</span></td>
                  <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106210&id=ic_1557759730033&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
                    <td><span class="win"><?=$TUC?></span></td>
                    <td>25</td>
                    <td>9</td>
                    <td>8</td>
                    <td>0</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><?=$ASTMB?></td>
                    <td>25</td>
                    <td>9</td>
                    <td>8</td>
                    <td>0</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><?=$ASEAT?></td>
                    <td>21</td>
                    <td>9</td>
                    <td>6</td>
                    <td>0</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><?=$VSM?></td>
                    <td>21</td>
                    <td>9</td>
                    <td>6</td>
                    <td>0</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><?=$BF?></td>
                    <td>19</td>
                    <td>9</td>
                    <td>5</td>
                    <td>0</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><?=$VCT?></td>
                    <td>17</td>
                    <td>9</td>
                    <td>4</td>
                    <td>0</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><?=$OBC?></td>
                    <td>16</td>
                    <td>9</td>
                    <td>3</td>
                    <td>1</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><?=$BBC?></td>
                    <td>14</td>
                    <td>9</td>
                    <td>2</td>
                    <td>1</td>
                    <td>6</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td><?=$SJBC?></td>
                    <td>13</td>
                    <td>9</td>
                    <td>2</td>
                    <td>0</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td><?=$FCB?></td>
                    <td>9</td>
                    <td>9</td>
                    <td>0</td>
                    <td>0</td>
                    <td>9</td>
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
