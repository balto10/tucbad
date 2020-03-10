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

  <h1><p> EQUIPE 7 </p></h1>
  <h2> Départementale 5 </h2>
  <div class="photo_active"> <img src="../photos/equipe7.jpg" alt="photo d'équipe 7"> </div>
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
                $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=7 AND joueur_genre=1';
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
                $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=7 AND joueur_genre=2';
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
            $TUC = 'Toulouse Université Club Badminton 1 (TUCB1)';
            $SJBC = 'Saint Jean Badminton Club 5 (SJBC5)';
            $OBC = 'Olympe Badminton Club 1 (OBC1)';
            $ASTMB = 'A.s. Toulouse Mirail Badminton 2 (ASTMB2)';
            $ASEAT = 'As Centre D\'essais Aeronautique 3 (ASEAT3)';
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
                    <td><?=$SJBC?></td>
                    <td><span class="win">6/1</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106358&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J2</td>
                    <td>28/11/2018</td>
                    <td><?=$TUC?></td>
                    <td> - </td>
                    <td><?=$ASTMB?></td>
                    <td><span class="lose">3/4</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106362&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J3</td>
                    <td>19/12/2018</td>
                    <td><?=$TUC?></td>
                    <td> - </td>
                    <td><?=$ASEAT?></td>
                    <td><span class="lose">2/5</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106363&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J4</td>
                    <td>23/01/2018</td>
                    <td><?=$TUC?></td>
                    <td> - </td>
                    <td><?=$OBC?></td>
                    <td><span class="lose">2/5</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106365&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J5</td>
                    <td>08/02/2019</td>
                    <td><?=$SJBC?></td>
                    <td> - </td>
                    <td><?=$TUC?></td>
                    <td><span class="win">3/4</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106368&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J6</td>
                    <td>12/03/2019</td>
                    <td><?=$ASTMB?></td>
                    <td> - </td>
                    <td><?=$TUC?></td>
                    <td><span class="win">0/7</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106372&id=ic_1557760984002&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J7</td>
                    <td>12/04/2019</td>
                    <td><?=$OBC?></td>
                    <td> - </td>
                    <td><?=$TUC?></td>
                    <td><span class="lose">6/1</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106376&id=ic_1557760984003&ic_ajax=1" target="_blank">Feuille de match</a></td>
                  </tr>
                  <tr>
                    <td>J8</td>
                    <td>16/04/2019</td>
                    <td><?=$ASEAT?></td>
                    <td> - </td>
                    <td><?=$TUC?></td>
                    <td><span class="lose">5/2</span></td>
                    <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106373&id=ic_1557760984003&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
                      <td><?=$OBC?></td>
                      <td>22</td>
                      <td>8</td>
                      <td>7</td>
                      <td>0</td>
                      <td>1</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td><?=$ASEAT?></td>
                      <td>20</td>
                      <td>8</td>
                      <td>6</td>
                      <td>0</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td><span class="win"><?=$TUC?></span></td>
                      <td>14</td>
                      <td>8</td>
                      <td>3</td>
                      <td>0</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td><?=$SJBC?></td>
                      <td>12</td>
                      <td>8</td>
                      <td>2</td>
                      <td>0</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td><?=$ASTMB?></td>
                      <td>12</td>
                      <td>8</td>
                      <td>2</td>
                      <td>0</td>
                      <td>6</td>
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
