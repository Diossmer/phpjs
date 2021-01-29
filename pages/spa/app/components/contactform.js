export function ContactForm(){
    const d=document,
    $form = d.createElement("form"),
    $styles=d.getElementById("dynamic-styles")
    $form.classList.add("contact-form")
    $styles.innerHTML=`
    .contact-form{
        --form-ok-color:#4caf50;
        --form-error-color:#f44336;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }
    .contact-form>*{
        padding: 0.5rem;
        margin: 1rem auto;
        display: block;
        border-top-left-radius:5%;
        border-top-right-radius:5%;
        border-bottom-left-radius:5%;
        border-bottom-right-radius:5%;
        width: 100%;
    }
    .contact-form textarea{
        resize: none;
    }
    .contact-form legend,
    .contact-form-response{
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
    }
    .contact-form input,
    .contact-form textarea{
        font-size: 1rem;
        font-family: sans-serif;
    }
    .contact-form input[type="submit"]{
        width: 50%;
        font-weight: bold;
        cursor: pointer;
    }
    .contact-form *::placeholder{
        color: #000;
    }
    .contact-form [required]:valid{
        border:thin solid var(--form-ok-color)
    }
    .contact-form [required]:invalid{
        border:thin solid var(--form-error-color)
    }
    .contact-form-error{
        margin-top: -1rem;
        font-size: 80%;
        background-color: var(--form-error-color);
        color: #fff;
        transition: all 800ms ease;
    }
    .contact-form-error.is-active{
        display: block;
        animation: show-message 1s 1 normal 0s ease-in-out both;
    }
    .none{
        display: none;
    }
    @keyframes show-message{
        0%{
            visibility: visible;
            opacity: 0;
        }
        100%{
            visibility: visible;
            opacity: 1;
        }
    }`
    $form.innerHTML=`
    <legend>Envíanos tus comentarios</legend>
    <input type="text" name="name" id="" placeholder="Escribe tu nombre" pattern="[A-Za-zÄÁáËÉéÏÍíÖÓóÜÚú\\s]+$" title="Nombre Sólo acepta letras y espacios en blanco" required>
    <input type="email" name="email" id="" placeholder="Escribe tu email" title="Email incorrecto" pattern="^[A-Za-z0-9]+(\\.[_a-z0-9]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*(\\.[a-z]{2,15})$"required>
    <input type="text" name="subject" id="" placeholder="Asunto a tratar" title="El Asunto es requerido" required>
    <textarea name="comments" cols="50" rows="5" id="" placeholder="Escribe tus comentarios" data-pattern="^.{1,255}$" title="Tu comentario no debe exceder los 255 caracteres" required></textarea>
    <input type="submit" value="Enviar">
    <div class="contact-form-loader none">
        <img src="app/assets/loader.svg" alt="Cargando...">
    </div>
    <div class="contact-form-response none">
        <p>Los datos han sido enviados</p>
    </div>`
    function validationsForm(){
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
                $loader.classList.add("none")
                $response.classList.remove("none")
                $response.innerHTML=`<p>${json.message}</p>`
                $form.reset()
            })
            .catch((err)=>{
                let message = xhr.statusText || "Ocurrió un error al enviar";
                $response.innerHTML = `<p>Error ${xhr.status}: ${message}</p>`;
            })
            .finally(setTimeout(()=>{
                $response.classList.add("none")
                $response.innerHTML="";
            },5000));
        })
    }
    setTimeout(() =>validationsForm(),0);
    return $form
}