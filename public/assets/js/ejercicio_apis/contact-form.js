const d = document
function contactForm(){
    const $form = d.querySelector(".contact-form"),
    $inputs = d.querySelectorAll(".contact-form [required]")
    $inputs.forEach(input=>{
        const $span=d.createElement("span")
        $span.id = input.name
        $span.textContent=input.title
        $span.classList.add("contact-form-error","none")
        input.insertAdjacentElement("afterend",$span)
    })
    d.addEventListener("keyup",(e)=>{
        if(e.target.matches(".contact-form [required]")){
            let $inputs=e.target,
            pattern = $inputs.pattern || $inputs.dataset.pattern
            if(pattern && $inputs.value!==""){
                let regex = new RegExp(pattern)
                return !regex.exec($inputs.value)
                ? d.getElementById($inputs.name).classList.add("is-active")
                : d.getElementById($inputs.name).classList.remove("is-active")
            }
            if(!pattern){
                let regex = new RegExp(pattern)
                return $inputs.value===""||$inputs.value===" "
                ? d.getElementById($inputs.name).classList.add("is-active")
                : d.getElementById($inputs.name).classList.remove("is-active")
            }
        }
    })
    d.addEventListener("submit",(e)=>{
        e.preventDefault()
        const $loader = d.querySelector(".contact-form-loader"),
        $response = d.querySelector(".contact-form-response")
        $loader.classList.remove("none")
        fetch("https://formsubmit.co/ajax/diossmer@gmail.com",{
            method:"POST",
            body:new FormData(e.target)
        })
        .then((res)=>res.ok?res.json():Promise.reject(res))
        .then((json)=>{
            console.log(json)
            $loader.classList.add("none")
            $response.classList.remove("none")
            $response.innerHTML=`<p>${json.message}</p>`
            $form.reset()
        })
        .catch((err)=>{
            console.error(err)
            let message = xhr.statusText || "Ocurrió un error al enviar";
            $response.innerHTML = `<p>Error ${xhr.status}: ${message}</p>`;
        })
        .finally(setTimeout(()=>{
            $response.classList.add("none")
            $response.innerHTML="";
        },5000));
    })
}
d.addEventListener("DOMContentLoaded",contactForm);