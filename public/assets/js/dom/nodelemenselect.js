/* nodos: es distinto a los elemento de html hay varios tipos de node.nodeType */
console.log(document.getElementsByTagName("li"))
console.log(document.getElementsByClassName("card"))
console.log(document.getElementsByName("nombre"))
// ha sido reeplazado por estos codigo siguientes:
console.log(document.getElementById("menu"))
console.log(document.querySelector("#menu"))//buscador de .class #id <html></html>
console.log(document.querySelector("a"))
console.log(document.querySelectorAll("a"))
console.log(document.querySelectorAll("a").length)
document.querySelectorAll("a").forEach((el)=>console.log(el))
console.log(document.querySelector(".card"))
console.log(document.querySelectorAll(".card"))
console.log(document.querySelectorAll(".card")[2])
console.log(document.querySelector("#menu li"))
console.log(document.querySelectorAll("#menu li"))