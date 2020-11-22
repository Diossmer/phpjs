const d=document, w=window, n=navigator
export default function getGeolocation(id){
    const $id = d.getElementById(id),
    options={
        enableHighAccuracy:true,
        timeout:3000,
        maximumAge:0
    }
    const success = (position) =>{
        let coords=position.coords
        $id.innerHTML=`
        <p>Tu posición actual es:</p>
        <ul>
        <li>Latitud: <b>${coords.latitude}</b></li>
        <li>Longitud: <b>${coords.longitude}</b></li>
        <li>Precisión: <b>${coords.accuracy}</b>metros</li>
        </ul>
        <a href="https://www.google.com/maps/@${coords.latitude},${coords.longitude},20z" target="__blank" rel="noopener">Ver Google Maps</a>"
        `
    }
    const error = (err) =>{
        $id.innerHTML=`<p>Error ${err.code}: <mark>${err.message}</mark></p>`
    }
    n.geolocation.getCurrentPosition(success,error,options)
    n.geolocation.watchPosition(success,error,options)
}
//REL="NOOPOENER" ES PARA QUE SE PUEDA CONTROLAR CON JAVASCRIPT