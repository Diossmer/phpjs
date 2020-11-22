const d = document,
    $table = d.querySelector(".crud-table"),
    $form = d.querySelector(".crud-form"),
    $title = d.querySelector(".crud-title"),
    $template = d.getElementById("crud-template").content,
    $fragment = d.createDocumentFragment();
    const getAll=async()=>{
        try {
            let res = await axios.get("http://127.0.0.1:5000/santos"),
            json = await res.data;
            console.log(json)
            json.forEach((el) => {
                $template.querySelector(".name").textContent = el.nombre
                $template.querySelector(".constellation").textContent = el.constelacion
                $template.querySelector(".edit").dataset.id = el.id
                $template.querySelector(".edit").dataset.name=el.nombre
                $template.querySelector(".edit").dataset.constellation=el.constelacion
                $template.querySelector(".delete").dataset.id=el.id
                let $clone = d.importNode($template,true);
                $fragment.appendChild($clone)
            });
            $table.querySelector("tbody").appendChild($fragment);
        } catch (err) {
            let message = err.statusText || "Ocurrió un error";
            $table.insertAdjacentHTML("afterend",`<p>ERROR: ${err.status} <b>${message}</b></p>`)
        }
    }
    d.addEventListener("DOMContentLoaded",getAll);
    d.addEventListener("submit",async (e)=>{
        if(e.target===$form){
            e.preventDefault();
            if(!e.target.id.value){
                //POST - CREATE
                try {
                    let options={
                        method:"POST",
                        headers:{
                            "Content-Type":"application/json; charset=utf-8"
                        },
                        data:JSON.stringify({
                            nombre:e.target.nombre.value,
                            constelacion:e.target.constelacion.value
                        }),
                    },
                    res = await axios("http://127.0.0.1:5000/santos",options),
                    json = await res.data;
                    location.reload();
                } catch (err) {
                    let message = err.statusText || "Ocurrió un error";
                    $form.insertAdjacentHTML("afterend",`<p>ERROR: ${err.status} <b>${message}</b></p>`)
                }
            }else{
                //PUT - PATCH - UPDATE
                try {
                    let options={
                        method:"PUT",
                        headers:{
                            "Content-Type":"application/json; charset=utf-8"
                        },
                        data:JSON.stringify({
                            nombre:e.target.nombre.value,
                            constelacion:e.target.constelacion.value
                        }),
                    },
                    res = await axios(`http://127.0.0.1:5000/santos/${e.target.id.value}`,options),
                    json = await res.data;
                    location.reload();
                } catch (err) {
                    let message = err.statusText || "Ocurrió un error";
                    $form.insertAdjacentHTML("afterend",`<p>ERROR: ${err.status} <b>${message}</b></p>`)
                }
            }
        }
    });
    d.addEventListener("click",async (e)=>{
        if(e.target.matches(".edit")){
            $title.textContent="Editar Santo";
            $form.nombre.value=e.target.dataset.name;
            $form.constelacion.value=e.target.dataset.constellation;
            $form.id.value=e.target.dataset.id;
        }
        if(e.target.matches(".delete")){
            //DELETE - DROP
        let isDelete=confirm(`¿Estás seguro de eliminar el id= ${e.target.dataset.id}?`);
        if(isDelete){
            try {
                let options={
                    method:"DELETE",
                    headers:{
                        "Content-Type":"application/json; charset=utf-8"
                    },
                },
                res = await axios(`http://127.0.0.1:5000/santos/${e.target.dataset.id}`,options),
                json = await res.data;
                location.reload();
            } catch (err) {
                let message = err.statusText || "Ocurrió un error";
                alert(`ERROR: ${err.status}: ${message}`);
            }
            }
        }
    });