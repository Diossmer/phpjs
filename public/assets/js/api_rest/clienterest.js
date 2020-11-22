(()=>{
    const xhr = new XMLHttpRequest(),
    $xhr = document.getElementById("tutorial113"),
    $fragment = document.createDocumentFragment()
    xhr.addEventListener("readystatechange",(e)=>{
        if(xhr.readyState!==4)return
        if(xhr.status>=200&&xhr.status<300){
            let json = JSON.parse(xhr.responseText)
            json.santos.forEach((el)=>{
                const $li = document.createElement("a")
                $li.innerHTML=` -- GET POST PUT/PATCH DELETE -> ${el.id} -- ${el.nombre} -- ${el.constelacion}`
                $fragment.appendChild($li)
            })
            $xhr.appendChild($fragment)
        }else{
            console.log("Error")
            let message = xhr.statusText || "OCURRIÓ UN ERROR"
            $xhr.innerHTML = `Error ${xhr.status}: ${message}`
        }
        console.log("Este mensaje cargará de cualquier forma")
    })
    xhr.open("GET","../../public/assets/js/api_rest/db.json")
    xhr.send()
})();