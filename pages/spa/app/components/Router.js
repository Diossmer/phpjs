import api from "../helpers/wp_api.js"
import {ajax} from "../helpers/ajax.js"
import {PostCard} from "./PostCard.js";
import { Post } from "./Posts.js";
export async function Router(){
    const d= document,w=window,$main = d.getElementById("main")
    let {hash}=location;
    $main.innerHTML=null;
    if(!hash || hash=== "#/"){
        await ajax({
            url: api.POSTS,
            cbSuccess: (POSTS) => {
                let html = "";
                POSTS.forEach((post) => html += PostCard(post));
                $main.innerHTML = html;
            }
        })
    }else if(hash.includes("#/search")){
        $main.innerHTML="<h2>Sección del Buscador</h2>"
    }else if(hash.includes("#/contacto")){
        $main.innerHTML="<h2>Sección del Contacto</h2>"
    }else{
        await ajax({
            url: `${api.POST}/${localStorage.getItem("wpPostId")}`,
            cbSuccess: (POST) => {
                $main.innerHTML=Post(POST)
            }
        })
    }
    d.querySelector(".loader").style.display="none"
}
