<?php

class Profil {

  private $_connexion;
  public function __construct(PDO $connexion) {
    $this -> _connexion = $connexion;
  }

  public function listing() {
    // Préparation de la requête
    $requete = 'SELECT * FROM joueurs INNER JOIN genres ON joueur_genre=gen_id
     INNER JOIN equipes ON joueur_equipe=equipe_id INNER JOIN status ON
     joueur_status=stat_id';
    // Envoi et récupération des données
    $reponse = $this -> _connexion -> query($requete);
    // Formatage
    $resultats = $reponse->fetchAll(PDO::FETCH_ASSOC);
    // Renvoi
    return $resultats;
  }
}
