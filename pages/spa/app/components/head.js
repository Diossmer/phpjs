export default function PWAs(){
    const d=document,
    $viewport=d.querySelector("meta[http-equiv='X-UA-Compatible']"),
    $manifest=d.createElement("link"),
    $description= d.createElement("meta"),
    $themeColor= d.createElement("meta"),
    $mobileOptimized= d.createElement("meta"),
    $handheldFriendly= d.createElement("meta"),
    $appleMobileWebAppCapable= d.createElement("meta"),
    $appleMobileWebAppStatusBarStyle= d.createElement("meta")
    //agregamos nombre a cada uno de los meta
    $description.setAttribute("name","description")
    $themeColor.setAttribute("name","theme-color")
    $mobileOptimized.setAttribute("name","MobileOptimized")
    $handheldFriendly.setAttribute("name","HandheldFriendly")
    $appleMobileWebAppCapable.setAttribute("name","apple-mobile-web-app-capable")
    $appleMobileWebAppStatusBarStyle.setAttribute("name","apple-mobile-web-app-status-bar-style")
    //agregamos el contenido de los meta
    $description.setAttribute("content","Bienvenid@s a #Malvestida, serie de contenido de la nuevas tendencias. :)")
    $themeColor.setAttribute("content","#770")
    $mobileOptimized.setAttribute("content","width")
    $handheldFriendly.setAttribute("content","true")
    $appleMobileWebAppCapable.setAttribute("content","yes")
    $appleMobileWebAppStatusBarStyle.setAttribute("content","black-translucent")
    //agregamos los meta uno debajo del otro
    $viewport.insertAdjacentElement("afterend",$description)
    $description.insertAdjacentElement("afterend",$themeColor)
    $themeColor.insertAdjacentElement("afterend",$mobileOptimized)
    $mobileOptimized.insertAdjacentElement("afterend",$handheldFriendly)
    $handheldFriendly.insertAdjacentElement("afterend",$appleMobileWebAppCapable)
    $appleMobileWebAppCapable.insertAdjacentElement("afterend",$appleMobileWebAppStatusBarStyle)
}