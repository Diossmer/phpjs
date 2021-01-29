const d = document, w=window, n = navigator,ua=n.userAgent
export default function userDeviceInfo(id){
    const $id=d.getElementById(id),
    isMobile={
        android:()=>ua.match(/android/i),
        ios:()=>ua.match(/iphone|ipad|ipod/i),
        window:()=>ua.match(/windows phone/i),
        any(){
            return this.android()||this.ios()||this.window()
        },
    },
    isDesktop={
        linux:()=>ua.match(/linux/i),
        mac:()=>ua.match(/mac os/i),
        window:()=>ua.match(/windows nt/i),
        any(){
            return this.linux()||this.mac()||this.window()
        }
    },
    isBrowser={
        chrome:()=>ua.match(/chrome/i),
        safari:()=>ua.match(/safari/i),
        firefox:()=>ua.match(/firefox/i),
        opera:()=>ua.match(/opera|opera mini/i),
        ie:()=>ua.match(/msie|iemobile/i),
        edge:()=>ua.match(/edge/i),
        any(){
            return (
            this.ie()||
            this.edge()||
            this.opera()||
            this.chrome()||
            this.safari()||
            this.firefox())
        }
    }
    $id.innerHTML=`
    <ul>
    <li>User Agent: <b>${ua}</b></li>
    <li>Plataforma: <b>${isMobile.any()?isMobile.any():isDesktop.any()}</b></li>
    <li>Navegador: <b>${isBrowser.any()}</b></li>
    </ul>`
    if(isBrowser.chrome()){
        $id.innerHTML+="<p><mark>Este contenido sólo se vé en Chrome</mark></p>"
    }
    if(isBrowser.firefox()){
        $id.innerHTML+="<p><mark>Este contenido sólo se vé en Firefox</mark></p>"
    }
    if(isDesktop.linux()){
        $id.innerHTML+="<p><mark>Descarga nuestro software para Linux</mark></p>"
    }
    if(isDesktop.window()){
        $id.innerHTML+="<p><mark>Descarga nuestro software para Window</mark></p>"
    }
    /* redirecciones */
    if(isMobile.android()){
        /* w.location.href="../../"
        w.location.href="https://jonmircha.com" */
        // w.location.href="#seccion6"
    }
}