let text = "Hola, soy tu amigo y docente digital. Jonathan MirCha. Bienvenido a la clase número N°## Del curso programación de javascript"
const hablar=(text)=>speechSynthesis.speak(new SpeechSynthesisUtterance(text));
hablar(text)
confirm("Estas en el Curso N°## de JavaScript...")
console.log("https://www.youtube.com/watch?v=GP8OCiJLeN4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=109")
let enlace = "https://www.youtube.com/watch?v=GP8OCiJLeN4&list=PLvq-jIkSeTUZ6QgYYO3MwG9EMqC-KoLXA&index=109"
const $link = document.querySelectorAll(".menu li a")[0]
$link.innerHTML="Click jomircha"
$link.setAttribute("target","__blank")
$link.setAttribute("href",enlace)