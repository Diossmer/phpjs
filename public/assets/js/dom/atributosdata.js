console.log(document.documentElement.lang);
console.log(document.documentElement.getAttribute("lang"));
console.log(document.querySelector(".link-dom").href);
console.log(document.querySelector(".link-dom").getAttribute("href"));//"Direccion de enlances"
document.documentElement.lang="en"
console.log(document.documentElement.lang)
document.documentElement.setAttribute("lang","es-MX")
const $linkDOM = document.querySelector(".link-dom")
$linkDOM.setAttribute("target","_blank")
$linkDOM.setAttribute("rel","noopener")//no es dependiente de la página origen
$linkDOM.setAttribute("href","#ddd")
console.log($linkDOM.hasAttribute("rel"))
$linkDOM.removeAttribute("rel")
console.log($linkDOM.hasAttribute("rel"))
//Data-Attributes
console.log($linkDOM.getAttribute("data-description"))
console.log($linkDOM.dataset)
console.log($linkDOM.dataset.description)
$linkDOM.setAttribute("data-description","Modelo de Objeto del Documento")
console.log($linkDOM.dataset.description)
$linkDOM.dataset.description="Suscribete a mi canal y comparte"
console.log($linkDOM.dataset.description)
console.log($linkDOM.hasAttribute("data-id"))
$linkDOM.removeAttribute("data-id")
console.log($linkDOM.hasAttribute("data-id"))