const d = document,
$main = d.querySelector("main");
fetch("../../public/assets/markdown/markdown.md")
.then((res)=>res.ok? res.text():Promise.reject(res))
.then((md) => {
    console.log(md);
    $main.innerHTML= new showdown.Converter().makeHtml(md);
    // $main.innerText= md;
})
.catch((err)=>{
    console.error(err);
    let message = err.statusText || "Ocurrió un error";
    $main.innerHTML = `<p>Error ${err.status}: ${message}</p>`;
})