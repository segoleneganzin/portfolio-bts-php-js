/*intersection observer api */
const ratio = .2
const options = {
    root: null, /* zone d'affichage visible */
    rootMargin: '0px', /*marge a depasser pour etre visible */
    threshold: ratio/* indiquer a partir de quel moment le systeme d'intersection est detecte 1 = l'entierté de l'element doit etre visible */
}

const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible')
            observer.unobserve(entry.target)
        } 
    })
}

document.documentElement.classList.add('reveal-visible')

window.addEventListener("DOMContentLoaded", function () {
  const observer = new IntersectionObserver(handleIntersect, options)
  const targets = document.querySelectorAll('.reveal')
  targets.forEach(function (target) {
    observer.observe(target)
  })
})

