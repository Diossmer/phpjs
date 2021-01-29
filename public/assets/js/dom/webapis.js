console.log(window)
console.log(window.document)
let text = "Hola, soy tu amigo y docente digital... Jonathan MirCha... Bienvenido a la clase número 60... Del curso programación de javascript"
const hablar=(text)=>speechSynthesis.speak(new SpeechSynthesisUtterance(text));
hablar(text)