<?php

  // FONCTION permettant de virer tous les accents
  function supprAccent($chaine) {
    // Préparation de la requête
    $regep = '&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml|caron);';
    // Retour formaté
    return preg_replace('#'.$regep.'#i', '$1', htmlentities($chaine, ENT_QUOTES, 'UTF-8'));
  }

  // FONCTION permettant de mettre la première lettre en majuscule, accent compris
  function majFirst($chaine) {
    // Extraction de la première
    $lettre = mb_substr($chaine, 0, 1);
    // Passage en majuscule
    $lettre = mb_strtoupper($lettre);
    // Retour formaté
    return $lettre.mb_substr($chaine, 1);
  }

?>
