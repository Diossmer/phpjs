(()=>{
    const xhr = new XMLHttpRequest(),
    $xhr = document.getElementById("tutorial112"),
    $fragment = document.createDocumentFragment()
    xhr.addEventListener("readystatechange",(e)=>{
        if(xhr.readyState!==4)return
        if(xhr.status>=200&&xhr.status<300){
            let json = JSON.parse(xhr.responseText)
            json.dioses.forEach((el)=>{
                const $li = document.createElement("li")
                $li.innerHTML=`Tutorial 112 CREANDO UN API REST FALSA -> ${el.id} -- ${el.nombre} -- ${el.constelacion}`
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
    // http://127.0.0.1:5000/santos
    xhr.open("GET","../../public/assets/js/api_rest/db.json")
    xhr.send()
})();