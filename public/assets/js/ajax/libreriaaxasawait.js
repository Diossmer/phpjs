(()=>{
    const $axiosAsync = document.getElementById("axios-async"),
    $fragment = document.createDocumentFragment()
    // https://jsonplaceholder.typicode.com/users
    // ../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json
    async function getData(){
        try {
            let res = await axios.get("../../public/assets/js/ajax/obtxhmlhttprequest&fetch.json"),
            json = await res.data
            //console.log(res,json)
        json.forEach((el)=>{
            const $li = document.createElement("li")
            $li.innerHTML=`${el.name} -- ${el.email} -- ${el.phone}`
            $fragment.appendChild($li)
        })
        $axiosAsync.appendChild($fragment)
        } catch (err) {
            console.log(err.response)
            let message = err.response.statusText || "OCURRIÓ UN ERROR"
            $axiosAsync.innerHTML = `Error ${err.response.status}: ${message}`
        }finally{
            console.log("Esto se ejecutará independientemente del try... catch")
        }
    }
    getData();
})()