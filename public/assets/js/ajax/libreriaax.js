(()=>{
    const $axios = document.getElementById("axios"),
    $fragment = document.createDocumentFragment()
    // https://jsonplaceholder.typicode.com/users
    // ../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json
    axios.get("../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json")
    .then((res)=>{
        let json=res.data
        json.forEach((el)=>{
            const $li = document.createElement("li")
            $li.innerHTML=`${el.name} -- ${el.email} -- ${el.phone}`
            $fragment.appendChild($li)
        })
        $axios.appendChild($fragment)
    })
    .catch((err)=>{
        let message = err.response.statusText || "OCURRIÓ UN ERROR"
        $axios.innerHTML = `Error ${err.response.status}: ${message}`
    })
    .finally(()=>{
        console.log("Esto se ejecutará independientemente del del resultado Axios")
    })
})();