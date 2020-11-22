const $whatIsDom=document.getElementById("que-es")
let text=`<p>El Modelo de Objetos del Documento (DOM) es un API para documentos HTML y XML.</p>
<p>Proporciona una representación estructural del documento, permitiendo la modificación</p>
<p>de su contenido o su presentación visual. Esencialmente, comunica las páginas web con los
</br> scripts o los lenguajes de programación.</p>`
$whatIsDom.innerText=text //no es parte del estandar
$whatIsDom.textContent=text
$whatIsDom.innerHTML=text
$whatIsDom.outerHTML=text