export function Menu(){
    const $menu = document.createElement("nav")
    $menu.classList.add("menu")
    $menu.innerHTML=`
    <a href="#" rel="noopener">Home</a>
    <span></span>
    <a href="#search" rel="noopener">Búsqueda</a>
    <span></span>
    <a href="#contacto" rel="noopener">Contacto</a>
    <span></span>
    <a href="https://aprendejavascript.org" target="_blank" rel="noopener">AprendeJS</a>`
    return $menu
}