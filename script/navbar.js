// Sélectionnez la div slide-contact
const slideContact = document.querySelector('.slide-contact');

// Sélectionnez tous les éléments avec la classe "color"
const elementsWithColor = document.querySelectorAll('.color');

const logoBleu = document.querySelector('.logoBleu');
const logoBlanc = document.querySelector('.logoBlanc');



// Créez une fonction de rappel à exécuter lorsque l'intersection change
const intersectionCallback = (entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // La div slide-contact est visible à 100%
      elementsWithColor.forEach((element) => {
        element.classList.add('changecolor');
      });

      logoBleu.classList.add('d-none');
      logoBlanc.classList.remove('d-none');

    } else {
      // La div slide-contact n'est plus visible
      elementsWithColor.forEach((element) => {
        element.classList.remove('changecolor');
      });

      logoBleu.classList.remove('d-none');
      logoBlanc.classList.add('d-none');

    }
  });
};

// Créez une instance de l'Intersection Observer
const intersectionObserver = new IntersectionObserver(intersectionCallback, {
  root: null, // Utilisez la fenêtre comme élément racine
  threshold: .7, // 100% de visibilité requise
});

// Observez la div slide-contact
intersectionObserver.observe(slideContact);






