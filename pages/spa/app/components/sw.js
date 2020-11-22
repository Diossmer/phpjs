//asignar un nombre y version al cache
const CACHE_NAME ='v1_cache_malvestida',
urlToCache=[
'/',
'/phpjs/pages/spa/app/index.js',
'/phpjs/pages/spa/app/assets/style.css',
'/phpjs/pages/spa/app/assets/favicon.png',
'/phpjs/pages/spa/app/assets/loader.svg',
'https://malvestida.com/wp-json/wp/v2/posts?_embed',
'https://malvestida.com/wp-json/wp/v2/posts',
'https://malvestida.com/wp-json/wp/v2/categories',
'https://malvestida.com/wp-json/wp/v2/search?_embed&search='
]
//Durante la fase de instalacion, generalmente se almacena en caché los activos estáticos
self.addEventListener('install',(e)=>{
    e.waitUntil(
        caches.open(CACHE_NAME)
        .then(cache=>{
            return cache.addAll(urlToCache)
            .then(()=>self.skipWaiting())
        })
        .catch((err)=>{
            let message = err.statusText || "Ocurrió un error";
            console.warn(`ERROR REGISTRO DEL CACHE ${err}: ${message}`)
        })
    )
})
//Una vez que se instala el ServiceWorkers, se activa y busca los recursos para hacer que funciones sin conexion
self.addEventListener('activate',(e)=>{
    const cacheWhitelist=[CACHE_NAME]
    e.waitUntil(
        caches.keys()
        .then(cachesNames=>{
            cachesNames.map((cachesName)=>{
                //Eliminamos lo que ya no se necesita en cache
                if(cacheWhitelist.indexOf(cachesName)===-1){
                    return caches.delete(cachesName)
                }
            })
        })
        //Le indica al ServiceWorkers el cache actual
        .then(()=>self.clients.claim())
    )
})
//Cuando el navegador recupera una url
self.addEventListener('fetch',(e)=>{
//Responde ya sea con el objeto en caché o continuar y buscar la url real
e.respondWith(
    caches.match(e.request)
    .then((res)=>{
        if(res)return res //recuperar del cache
        return fetch(e.request) //recuperar de la petición a la url
    })
)
})