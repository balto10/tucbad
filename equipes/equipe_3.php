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

    <h1><p> EQUIPE 3 </p></h1>
    <h2> Départementale 3 - Poule D</h2>

    <div class="photo_active"> <img src="../photos/equipe3.jpg" alt="photo d'équipe 3"> </div>
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
                  $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=3 AND joueur_genre=1';

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
                  $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=3 AND joueur_genre=2';

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

$TUC = 'Toulouse Université Club Badminton 3 (TUCB3)';
$FCB = 'Les Bauzibads 1 (FBC1)';
$TOAC = 'Toulouse Olympique Aerospatiale Club 3 (TOAC3)';
$OBC = 'Olympe Badminton Club 2 (OBC2)';
$VCT = 'Volant Club Toulousain 7 (VCT7)';
$BEP = 'Badminton Etoile Portesienne 1 (BEP1)';

?>
<br/>
<br/>
  <div class="rencontres">
    <table>
        <tbody>
          <tr>
            <td>J1</td>
            <td>17/10/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$FCB?></td>
            <td><span class="win">5/2</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106173&id=ic_1557758330971&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J2</td>
            <td>19/11/2018</td>
            <td><?=$VCT?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106176&id=ic_1557758330972&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J3</td>
            <td>26/11/2018</td>
            <td><?=$TOAC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="lose">4/3</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106177&id=ic_1557758330972&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J4</td>
            <td>19/12/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$OBC?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106181&id=ic_1557758330972&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J5</td>
            <td>23/01/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BEP?></td>
            <td><span class="win">4/3</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106184&id=ic_1557758330972&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J6</td>
            <td>30/01/2019</td>
            <td><?=$FCB?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106186&id=ic_1557758330972&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J7</td>
            <td>20/02/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$VCT?></td>
            <td><span class="lose">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106189&id=ic_1557758330973&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J8</td>
            <td>20/03/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$TOAC?></td>
            <td><span class="lose">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106194&id=ic_1557758330973&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J9</td>
            <td>29/03/2019</td>
            <td><?=$OBC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106197&id=ic_1557758330973&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J10</td>
            <td>15/04/2019</td>
            <td><?=$BEP?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106200&id=ic_1557758330973&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
            <td><?=$TOAC?></td>
            <td>28</td>
            <td>10</td>
            <td>9</td>
            <td>0</td>
            <td>1</td>
          </tr>
          <tr>
            <td>2</td>
            <td><span class="win"><?=$TUC?></span></td>
            <td>24</td>
            <td>10</td>
            <td>7</td>
            <td>0</td>
            <td>3</td>
          </tr>
          <tr>
            <td>3</td>
            <td>VCT</td>
            <td>24</td>
            <td>10</td>
            <td>7</td>
            <td>0</td>
            <td>3</td>
          </tr>
          <tr>
            <td>4</td>
            <td><?=$OBC?></td>
            <td>16</td>
            <td>10</td>
            <td>3</td>
            <td>0</td>
            <td>7</td>
          </tr>
          <tr>
            <td>5</td>
            <td><?=$BEP?></td>
            <td>14</td>
            <td>10</td>
            <td>2</td>
            <td>0</td>
            <td>8</td>
          </tr>
          <tr>
            <td>6</td>
            <td><?=$FCB?></td>
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
