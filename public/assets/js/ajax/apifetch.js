(()=>{
    const $fetch = document.getElementById("fetch"),
    $fragment = document.createDocumentFragment()
    // https://jsonplaceholder.typicode.com/users
    fetch("../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json")
    .then((res)=>res.ok?res.json():Promise.reject(res))
    .then((json)=>{
        json.forEach((el)=>{
            const $li = document.createElement("li")
            $li.innerHTML=`${el.name} -- ${el.email} -- ${el.phone}`
            $fragment.appendChild($li)
        })
        $fetch.appendChild($fragment)
    }).catch((err)=>{
        console.log(err)
        let message = err.statusText || "OCURRIÓ UN ERROR"
            $fetch.innerHTML = `Error ${err.status}: ${message}`
    }).finally(()=>{
        console.log("Esto se ejecutará independientemente del resultado de la Promesa Fetch")
    })
})();