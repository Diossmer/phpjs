const d = document;
let x=0,y=0;
export function shortcuts(e){
    /*
    console.log(e.type);
    console.log(e.key);
    console.log(e.keyCode);
    console.log(e.ctrlKey);
    console.log(e.altKey);
    console.log(e.shiftKey);
    console.log(e);
    */
    if(e.key==="a"&&e.altKey){
        alert("Haz lanzado una alerta con el teclado.")
    }
    if(e.key==="c"&&e.altKey){
        confirm("Haz lanzado una confirmación con el teclado.")
    }
    if(e.key==="p"&&e.altKey){
        prompt("Haz lanzado una aviso con el teclado.")
    }
}
export function moveBall(e,ball,stage){
    const $ball = d.querySelector(ball),
    $stage = d.querySelector(stage),
    limitsBall = $ball.getBoundingClientRect(),
    limitsStage = $stage.getBoundingClientRect()
    /*
    console.log(e.keyCode);
    console.log(limitsBall,limxitsStage);
    const move=(direction)=>{}
    */
    switch (e.keyCode) {
        case 37:
            if(limitsBall.left > limitsStage.left){
                e.preventDefault()
                console.log(`Flecha izquierda 37-${e.key}`);
                x--
            }
        break;
        case 38:
            if(limitsBall.top > limitsStage.top){
                e.preventDefault()
                console.log(`Flecha arriba 38-${e.key}`);
                y--
            }
        break;
        case 39:
            if(limitsBall.right < limitsStage.right){
                e.preventDefault()
                console.log(`Flecha derecha 39-${e.key}`);
                x++
            }
        break;
        case 40:
            if(limitsBall.bottom < limitsStage.bottom){
                e.preventDefault()
                console.log(`Flecha abajo 40-${e.key}`);
                y++
            }
        break;
        default:
        break;
    }
$ball.style.transform=`translate(${Math.round(x*10)}px,${Math.round(y*10)}px)`;
}