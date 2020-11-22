console.log("https://www.youtube.com/watch?v=wzoUu6rcQ4c&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=112")
let enlace = "https://www.youtube.com/watch?v=wzoUu6rcQ4c&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=112"
let $link = document.querySelectorAll(".menu li a")[0]
$link.innerHTML="Click jomircha"
$link.setAttribute("target","__blank")
$link.setAttribute("href",enlace)
console.log(enlace)
enlace = "https://insomnia.rest/"
$links =document.querySelectorAll(".menu li a")[1]
$links.innerHTML="Insomnia"
$links.setAttribute("target","__blank")
$links.setAttribute("href",enlace)
console.log(enlace)
enlace = "https://github.com/nvm-sh/nvm#installing-and-updating"
$links1 =document.querySelectorAll(".menu li a")[2]
$links1.innerHTML="NVM - Node Version Manager "
$links1.setAttribute("target","__blank")
$links1.setAttribute("href",enlace)
console.log(enlace)
enlace = "https://jsonplaceholder.typicode.com/"
$links1 =document.querySelectorAll(".menu li a")[3]
$links1.innerHTML="{JSON} Placeholder"
$links1.setAttribute("target","__blank")
$links1.setAttribute("href",enlace)
console.log(enlace)