 // Ajustez la valeur du seuil selon vos besoins
 const option = {
    root: null,
    rootMargin: '0px',
    threshold: .5
  };
  
  const handleIntersectDiv = function (entries, observer) {
    entries.forEach(function (entry) {
      const target = entry.target;
      const navItems = document.querySelectorAll('.navs a');
  
      if (entry.isIntersecting) {
        // L'élément "slide" est visible
        navItems[Array.from(document.querySelectorAll('.slide')).indexOf(target)].classList.add('highlight');
      } else {
        // L'élément "slide" n'est pas visible
        navItems[Array.from(document.querySelectorAll('.slide')).indexOf(target)].classList.remove('highlight');
      }
    });
  };
  
  document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver(handleIntersectDiv, option);
    const slides = document.querySelectorAll('.slide');
  
    slides.forEach(function (slide) {
      observer.observe(slide);
    });
  });