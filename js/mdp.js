// FONCTION de vérification de champs (non vide)
function form_verifTxt(formulaire, champs) {

  // Initialisation
  let erreurs;

  // Tableau des champs à vérifier
  let tab_champs = champs;

  // Ciblages
  let form = document.querySelector('form[name='+formulaire+']');
  let bouton = document.querySelector('input[type=submit]');
  let popup = document.querySelector('#popup');
  let section = document.querySelector('#popup section');

  // Gestion du clic ENVOYER
  bouton.addEventListener('click', function(event){
    // Désactivation du comportement HTML de l'élément
    event.preventDefault();

    // Réinitialisation des erreurs
    erreurs = '';

    // Création d'un objet FormData qui va récupérer toutes les infos du formulaire
    let tab_form = new FormData(form);

    // Parcours du l'objet pour récupérer chaque valeur
    for (let element of tab_form) {
      if (tab_champs.indexOf(element[0]) != -1) {
        // Test
        if (element[1] == '') {
          erreurs+= '<li>'+element[0]+' manquant</li>';
        }
      }
    }

    // FONCTION decompte
    let decompte = function() {
      popup.classList.remove('actif');
    };

    // Affichage des erreurs / Envoi du formulaire
    if (erreurs!='') {
      section.innerHTML = '<ul>'+erreurs+'</ul>';
      popup.classList.add('actif');
      setTimeout(decompte,2000);
    } else {
      form.submit();
    }

  });

}
