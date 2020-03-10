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

    <h1><p> EQUIPE 6 </p></h1>
    <h2> Départementale 4 - Poule C </h2>

    <div class="photo_active"> <img src="../photos/equipe6.jpg" alt="photo d'équipe 6"> </div>
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
                    $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=6 AND joueur_genre=1';

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
                    $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=6 AND joueur_genre=2';

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

      $TUC = 'Toulouse Université Club Badminton 6 (TUCB6)';
      $CBV = 'Club de Badminton Villeneuvois 5 (CBV5)';
      $RG = 'Recrea-gym 2 (RG2)';
      $FVA = 'Les Fous du Volant Aussonnais 2 (FVA2)';
      $USLB = 'Union Sportive Leguevinoise Badminton 3 (USLB3)';
      $BCF = 'Badminton Club de Fontenilles 1 (BCF1)';
      $AFB = 'Avenir Fonsorbais Badminton 1 (AFB1)';
      $VCLL = 'Foyer Rural VC Lavernose-Lacasse 1 (VCLL1)';
      $BM = 'Badminton Muret 4 (BM4)';

      ?>
      <br/>
      <br/>
      <div class="rencontres">
        <table>
            <tbody>
              <tr>
                <td>J1</td>
                <td>18/10/2018</td>
                <td><?=$TUC?></td>
                <td> - </td>
                <td><?=$RG?></td>
                <td><span class="lose">2/5</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2108038&id=ic_1557760392141&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J2</td>
                <td>16/11/2018</td>
                <td><?=$CBV?></td>
                <td> - </td>
                <td><?=$TUC?></td>
                <td><span class="lose">5/2</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2108037&id=ic_1557760615834&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J3</td>
                <td>03/12/2018</td>
                <td><?=$FVA?></td>
                <td> - </td>
                <td><?=$TUC?></td>
                <td><span class="win">2/5</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110122&id=ic_1557760615834&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J4</td>
                <td>09/01/2018</td>
                <td><?=$USLB?></td>
                <td> - </td>
                <td><?=$TUC?></td>
                <td><span class="lose">5/2</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110120&id=ic_1557760615834&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J5</td>
                <td>17/01/2019</td>
                <td><?=$BCF?></td>
                <td> - </td>
                <td><?=$TUC?></td>
                <td><span class="lose">4/3</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110118&id=ic_1557760615835&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J6</td>
                <td>06/02/2019</td>
                <td><?=$TUC?></td>
                <td> - </td>
                <td><?=$AFB?></td>
                <td><span class="lose">1/6</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110123&id=ic_1557760615835&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J7</td>
                <td>20/03/2019</td>
                <td><?=$TUC?></td>
                <td> - </td>
                <td><?=$VCLL?></td>
                <td><span class="lose">1/6</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110121&id=ic_1557760615835&ic_ajax=1" target="_blank">Feuille de match</a></td>
              </tr>
              <tr>
                <td>J8</td>
                <td>03/04/2019</td>
                <td><?=$TUC?></td>
                <td> - </td>
                <td><?=$BM?></td>
                <td><span class="win">4/3</span></td>
                <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2110119&id=ic_1557760615835&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
                  <td><?=$AFB?></td>
                  <td>22</td>
                  <td>8</td>
                  <td>7</td>
                  <td>0</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?=$VCLL?></td>
                  <td>22</td>
                  <td>8</td>
                  <td>7</td>
                  <td>0</td>
                  <td>1</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><?=$USLB?></td>
                  <td>18</td>
                  <td>8</td>
                  <td>5</td>
                  <td>0</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><?=$BCF?></td>
                  <td>18</td>
                  <td>8</td>
                  <td>5</td>
                  <td>0</td>
                  <td>3</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?=$CBV?></td>
                  <td>16</td>
                  <td>8</td>
                  <td>4</td>
                  <td>0</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><?=$RG?></td>
                  <td>16</td>
                  <td>8</td>
                  <td>4</td>
                  <td>0</td>
                  <td>4</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><span class="win"><?=$TUC?></span></td>
                  <td>12</td>
                  <td>8</td>
                  <td>2</td>
                  <td>0</td>
                  <td>6</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><?=$FVA?></td>
                  <td>10</td>
                  <td>8</td>
                  <td>1</td>
                  <td>0</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><?=$BM?></td>
                  <td>10</td>
                  <td>8</td>
                  <td>1</td>
                  <td>0</td>
                  <td>7</td>
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
