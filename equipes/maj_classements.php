<?php

// On vérifie que cURL est installé
if (!function_exists("curl_init")){
    die("Désolé cURL n'est pas installé !");
};

// Connexion à la BDD
include('../includes/inc_config.php');
include('../includes/inc_connexion.php');

// Collecte de toutes les licences

$collecte = $connexion->prepare('SELECT joueur_licence FROM joueurs');
$collecte -> execute();

// Parcours du tableau des licences
foreach ($collecte as $ligne) {
  $licence = $ligne['joueur_licence'];


// Initialisation
$url = 'https://testapi.badnet.org/api/member/rank?'. http_build_query([
  'licence' => $licence
])
;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$headers = [
  'x-badnet-token:f7cade80b7cc92b991cf4d2806d6bd76',
  'x-badnet-origin:badnet',
  'Content-Type:application/json',
  'Accept:application/json'
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Exécution de la requête
$resp = curl_exec($curl);

if( $resp === false)
{
echo 'Erreur Curl : ' . curl_error($curl);
}
else
{
echo 'L\'opération s\'est terminée sans aucune erreur';
}
// Collecte des rangs en parcourant les tableaux
$rank = (json_decode($resp, true)['rank']['rankingsingle']['name']);
$rank .= '/'.(json_decode($resp, true)['rank']['rankingdouble']['name']);
$rank .= '/'.(json_decode($resp, true)['rank']['rankingmixed']['name']);
// Préparation de la requête
$updaterank = $connexion->prepare('UPDATE joueurs SET joueur_classement = ? WHERE joueur_licence = ?');

// Exécution de la requête
$updaterank -> execute(array($rank,$licence));
// Fermeture de la boucle
}
curl_close($curl);
?>
