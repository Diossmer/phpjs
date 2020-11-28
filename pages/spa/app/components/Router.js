import api from "../helpers/wp_api.js"
import {ajax} from "../helpers/ajax.js"
import {PostCard} from "./PostCard.js";
import {Post} from "./Posts.js";
import {SearchCard} from "./searchCard.js";
import {ContactForm} from "./contactform.js";
export async function Router(){
    const d= document,w=window,$main = d.getElementById("main")
    let {hash}=location;
    $main.innerHTML=null;
    if(!hash || hash=== "#"){
        await ajax({
            url: api.POSTS,
            cbSuccess: (POSTS) => {
                let html = "";
                POSTS.forEach((post) => html += PostCard(post));
                $main.innerHTML = html;
            }
        })
    }else if(hash.includes("#search")){
        let query = localStorage.getItem("wpSearch")
        if(!query){
            d.querySelector(".loader").style.display="none"
            return false
        }
        await ajax({
            url: `${api.SEARCH}${query}`,
            cbSuccess: (SEARCH) => {
                let html=""
                if(SEARCH.length===0){
                    html=`
                    <p class="error">
                    No existen resultados de su búsqueda
                    <mark>${query}</mark>
                    </p>`
                }else{
                    SEARCH.forEach((post) => html += SearchCard(post))
                }
                $main.innerHTML=html
            }
        })
    }else if(hash.includes("#contacto")){
        setTimeout(() => {
            $main.appendChild(ContactForm())
        },100);
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
