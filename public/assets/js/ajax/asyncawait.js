(()=>{
    const $fetchAsync = document.getElementById("fetch-async"),
    $fragment = document.createDocumentFragment()
    // https://jsonplaceholder.typicode.com/users
    //../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json
    async function getData(){
        try {
            let res = await fetch("../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json"),
            json = await res.json()
            // if(!res.redirected) throw new Error("OCURRIÓ UN ERROR AL SOLICITAR LOS DATOS")
            if(!res.ok)throw{status:res.status,statusText:res.statusText}
            json.forEach((el)=>{
                const $li = document.createElement("li")
                $li.innerHTML=`${el.name} -- ${el.email} -- ${el.phone}`
                $fragment.appendChild($li)
            })
            $fetchAsync.appendChild($fragment)
        } catch (err) {
            let message = err.statusText || "OCURRIÓ UN ERROR"
            $fetchAsync.innerHTML = `Error ${err.status}: ${message}`
        }finally{
            console.log("Esto se ejecutará independientemente del try... catch")
        }
    }
    getData()
})()