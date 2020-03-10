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

    <h1><p> EQUIPE 4 </p></h1>
    <h2> Départementale 3 - Poule A</h2>

    <div class="photo_active"> <img src="../photos/equipe4.jpg" alt="photo d'équipe 4"> </div>
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
                $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=4 AND joueur_genre=1';

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
                $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=4 AND joueur_genre=2';

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

$TUC = 'Toulouse Université Club Badminton 4 (TUCB4)';
$RG = 'Recrea-Gym 1 (RG1)';
$CBV = 'Club De Badminton Villeneuvois 3 (CBV3)';
$BSG = 'Badminton Saint Gaudens 2 (BSG31 2)';
$VCT = 'Volant Club Toulousain 6 (VCT6)';
$VRP = 'Volant Radieux Pinsaguelois 1 (VRP1)';

?>
<br/>
<br/>
  <div class="rencontres">
    <table>
        <tbody>
          <tr>
            <td>J1</td>
            <td>18/10/2018</td>
            <td><?=$VCT?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106082&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J2</td>
            <td>14/11/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$RG?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106086&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J3</td>
            <td>28/11/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$CBV?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106089&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J4</td>
            <td>10/12/2018</td>
            <td><?=$BSG?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">0/7</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106092&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J5</td>
            <td>16/01/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$VRP?></td>
            <td><span class="lose">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106093&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J6</td>
            <td>06/02/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$VCT?></td>
            <td><span class="win">5/2</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106097&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J7</td>
            <td>14/02/2019</td>
            <td><?=$RG?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106100&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J8</td>
            <td>15/03/2019</td>
            <td><?=$CBV?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106104&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J9</td>
            <td>03/04/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BSG?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106106&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J10</td>
            <td>11/04/2019</td>
            <td><?=$VRP?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106108&id=ic_1557759070728&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
              <td>28</td>
              <td>10</td>
              <td>9</td>
              <td>0</td>
              <td>1</td>
            </tr>
            <tr>
              <td>2</td>
              <td><?=$CBV?></td>
              <td>24</td>
              <td>10</td>
              <td>7</td>
              <td>0</td>
              <td>3</td>
            </tr>
            <tr>
              <td>3</td>
              <td><?=$VRP?></td>
              <td>18</td>
              <td>10</td>
              <td>4</td>
              <td>0</td>
              <td>6</td>
            </tr>
            <tr>
              <td>4</td>
              <td><?=$RG?></td>
              <td>18</td>
              <td>10</td>
              <td>4</td>
              <td>0</td>
              <td>6</td>
            </tr>
            <tr>
              <td>5</td>
              <td><?=$VCT?></td>
              <td>18</td>
              <td>10</td>
              <td>4</td>
              <td>0</td>
              <td>6</td>
            </tr>
            <tr>
              <td>6</td>
              <td><?=$BSG?></td>
              <td>10</td>
              <td>14</td>
              <td>2</td>
              <td>0</td>
              <td>8</td>
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
