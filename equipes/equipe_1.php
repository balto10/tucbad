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
    <h1><p> EQUIPE 1 </p></h1>
    <h2> Départementale 1 </h2>

    <div class="photo_active"> <img src="../photos/equipe1.jpg" alt="photo d'équipe 1"> </div>
      <div class="mise_en_page">
        <div class="tableaux">
        <div class="tableauH">
          <table>
            <caption> Joueurs </caption>
            <thead>
              <tr>
                <th>Licence</th>
                <th>Nom</th>
                <th>Classements*</th>
              </tr>
            </thead>
            <tbody>


                  <?php



                  // Préparation de la requête
                  $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=1 AND joueur_genre=1';

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
                    <th>Classements*</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Préparation de la requête
                  $requete = 'SELECT joueur_nom, joueur_prenom, joueur_licence, joueur_classement FROM joueurs WHERE joueur_equipe=1 AND joueur_genre=2';

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
$CBV = 'Club de Badminton Villeneuvois 1 (CBV1)';
$BSG = 'Badminton Saint Gaudens 1 (BSG31 1)';
$OBC = 'Olympe Badminton Club 1 (OBC1)';
$VCT = 'Volant Club Toulousain 4 (VCT4)';
$TMBC = 'Toulouse Métropole Badminton CLUB 1 (TMBC1)';

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
            <td><?=$CBV?></td>
            <td><span class="win">5/2</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105981&id=ic_1557751175459&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J2</td>
            <td>15/11/2018</td>
            <td><?=$BSG?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105982&id=ic_1557751175461&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J3</td>
            <td>30/11/2018</td>
            <td><?=$OBC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">0/7</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105986&id=ic_1557751175463&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J4</td>
            <td>12/12/2018</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$VCT?></td>
            <td><span class="win">5/2</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105990&id=ic_1557751175465&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J5</td>
            <td>16/01/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$TMBC?></td>
            <td><span class="lose">1/6</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106008&id=ic_1557751175467&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J6</td>
            <td>08/02/2019</td>
            <td><?=$CBV?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">3/4</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105994&id=ic_1557751175469&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J7</td>
            <td>13/02/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$BSG?></td>
            <td><span class="win">6/0</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105998&id=ic_1557754021781&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J8</td>
            <td>13/03/2019</td>
            <td><?=$TUC?></td>
            <td> - </td>
            <td><?=$OBC?></td>
            <td><span class="win">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106002&id=ic_1557754021782&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J9</td>
            <td>27/03/2019</td>
            <td><?=$VCT?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="win">2/5</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2106004&id=ic_1557754021782&ic_ajax=1" target="_blank">Feuille de match</a></td>
          </tr>
          <tr>
            <td>J10</td>
            <td>19/04/2019</td>
            <td><?=$TMBC?></td>
            <td> - </td>
            <td><?=$TUC?></td>
            <td><span class="lose">6/1</span></td>
            <td><a href="https://badnet.org/Src/index.php?ic_a=656392&tieId=2105993&id=ic_1557754021783&ic_ajax=1" target="_blank">Feuille de match</a></td>
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
              <td><?=$TMBC?></td>
              <td>29</td>
              <td>10</td>
              <td>9</td>
              <td>1</td>
              <td>0</td>
            </tr>
            <tr>
              <td>2</td>
              <td><span class="win"><?=$TUC?></span></td>
              <td>26</td>
              <td>10</td>
              <td>8</td>
              <td>0</td>
              <td>2</td>
            </tr>
            <tr>
              <td>3</td>
              <td><?=$CBV?></td>
              <td>19</td>
              <td>10</td>
              <td>5</td>
              <td>0</td>
              <td>5</td>
            </tr>
            <tr>
              <td>4</td>
              <td><?=$OBC?></td>
              <td>18</td>
              <td>10</td>
              <td>4</td>
              <td>0</td>
              <td>6</td>
            </tr>
            <tr>
              <td>5</td>
              <td><?=$VCT?></td>
              <td>15</td>
              <td>10</td>
              <td>2</td>
              <td>1</td>
              <td>7</td>
            </tr>
            <tr>
              <td>6</td>
              <td><?=$BSG?></td>
              <td>12</td>
              <td>10</td>
              <td>1</td>
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
