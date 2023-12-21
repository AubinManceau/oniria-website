const gris = document.getElementById("gris");
const noir = document.getElementById("noir");
const bleu = document.getElementById("bleu");
const blanc = document.getElementById("blanc");
const imgGris = document.getElementById("imgGris")
const imgNoir = document.getElementById("imgNoir")
const imgBleu = document.getElementById("imgBleu")
const imgBlanc = document.getElementById("imgBlanc")


const navOne = document.getElementById("Navone");
const navTwo = document.getElementById("Navtwo");
const navThree = document.getElementById("Navthree");
const navFour = document.getElementById("Navfour");
const navFive = document.getElementById("Navfive");

gris.addEventListener("click", function(){
    gris.classList.add("focus")
    bleu.classList.remove("focus")
    noir.classList.remove("focus")
    blanc.classList.remove("focus")
    imgGris.classList.remove("none")
    imgNoir.classList.add("none")
    imgBleu.classList.add("none")
    imgBlanc.classList.add("none")
})

noir.addEventListener("click", function(){
    noir.classList.add("focus")
    bleu.classList.remove("focus")
    gris.classList.remove("focus")
    blanc.classList.remove("focus")
    imgGris.classList.add("none")
    imgNoir.classList.remove("none")
    imgBleu.classList.add("none")
    imgBlanc.classList.add("none")
})

bleu.addEventListener("click", function(){
    bleu.classList.add("focus")
    noir.classList.remove("focus")
    gris.classList.remove("focus")
    blanc.classList.remove("focus")
    imgGris.classList.add("none")
    imgNoir.classList.add("none")
    imgBleu.classList.remove("none")
    imgBlanc.classList.add("none")
})

blanc.addEventListener("click", function(){
    gris.classList.remove("focus")
    bleu.classList.remove("focus")
    noir.classList.remove("focus")
    blanc.classList.add("focus")
    imgGris.classList.add("none")
    imgNoir.classList.add("none")
    imgBleu.classList.add("none")
    imgBlanc.classList.remove("none")
})







const threshold = .1
const options = {
  root: null,
  rootMargin: '0px',
  threshold
}

const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > threshold) {
      entry.target.classList.remove('reveal')
      observer.unobserve(entry.target)
    }
  })
}

document.documentElement.classList.add('reveal-loaded')

window.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  const targets = document.querySelectorAll('.reveal')
  targets.forEach(function (target) {
    observer.observe(target)
  })
})


const blocHorizontal = document.getElementsByClassName('.blocHorizontal');
console.log(blocHorizontal.clientWidth)