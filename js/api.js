document.addEventListener('DOMContentLoaded', function(){


  // Initialisation
  let url = 'https://testapi.badnet.org/';
  let token = 'f7cade80b7cc92b991cf4d2806d6bd76';
  let rank = '' ;

  // Ciblage


  // Préparation du Header
  let monHeader = new Headers({
    // ‘Access-Control-Allow-Origin’ : ‘badnet’,
    'x-badnet-token' : token,
    'x-badnet-origin' : 'badnet'
  });
  // Préparation du INIT
  let monInit = {
    method : 'GET',
    headers : monHeader,
    mode : 'cors'
  }

// Fetch pour récupérer les infos puis stockage dans la variable Rank puis affichage.
fetch(url+'api/member/rank?licence='+joueur_licence, monInit)
  .then(function(resultat){
    return resultat.json();
  }).then(function(reponse){
  rank +=(reponse['rank']['rankingsingle']['name']);
  rank += '/';
  rank +=(reponse['rank']['rankingdouble']['name']);
  rank += '/';
  rank +=(reponse['rank']['rankingmixed']['name']);
  console.log(reponse);
  document.getElementById('classement_profile').innerHTML = rank;
  document.getElementsByTagName('h4').innerHTML = rank;

})



//################## Différentes requêtes possibles et utiles ##################

// https://api.badnet.org/api/asso/members?numasso=
// https://api.badnet.org/api/member/rank?licence=

// Pour aller chercher la liste des membres du TUC :

  // fetch(url+'api/asso/members?numasso=OCCI.31.99.034', monInit)
  //   .then(function(resultat){
  //     return resultat.json();
  //   }).then(function(reponse){

// https://testapi.badnet.org/api/asso/players\?numasso\=OCCI.31.95.017\&offset\=0\&limit\=200


  });
