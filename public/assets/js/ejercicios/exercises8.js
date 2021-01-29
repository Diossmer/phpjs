/* 24) Programa una función que dado un arreglo de números devuelva un objeto con dos arreglos, el primero tendrá los numeros
ordenados en forma ascendente y el segundo de forma descendiente, pe. miFuncion([7, 5,7,8,6]) devolverá
{ asc: [5,6,7,7,8], desc: [8,7,7,6,5] }. */
export const ordenarArreglo=(arr = undefined)=>{
    if(arr === undefined) return console.warn("No ingresaste un arreglo de números")
    if(!(arr instanceof Array)) return console.error("El valor que ingresaste no es un arreglo")
    if(arr.length ===0) return console.error("El arrego esta vacío")
    for(let num of arr){
        if(typeof num !== "number") return console.error(`El valor "${num}" ingresado, NO es un número`)
    }
    return console.info({
        arr,
        asc: arr.map(elemento => elemento).sort(),
        desc: arr.map(el=>el).sort().reverse()
    })
}
/* 25) Programa una función que dado un arreglo de elementos, elimine los duplicados,
pe. miFuncion(["x", 10, "x", 2, "10", 10, true, true]) devolverá ["x", 10, 2, "10", true]. */
export const quitarDuplicados=(arr=undefined)=>{
    if(arr === undefined) return console.warn("No ingresaste un arreglo de números")
    if(!(arr instanceof Array)) return console.error("El valor que ingresaste no es un arreglo")
    if(arr.length ===0) return console.error("El arrego esta vacío")
    if(arr.length===1) return console.error(`El arreglo debe tener al menos 2 elemento`)
    /* return console.info({
        original:arr,
        sinDuplicados:arr.filter((value,index,self)=>self.indexOf(value)=== index)
    }) */
    return console.info({
        original:arr,
        sinDuplicados:[new Set(arr)]
    })
}
/* 26) Programa una función que dado un arreglo de números obtenga el promedio,
pe. promedio([9,8,7,6,5,4,3,2,1,0]) devolverá 4.5. */
export const promedio=(arr=undefined)=>{
    if(arr === undefined) return console.warn("No ingresaste un arreglo de números")
    if(!(arr instanceof Array)) return console.error("El valor que ingresaste no es un arreglo")
    if(arr.length ===0) return console.error("El arrego esta vacío")
    for(let num of arr){
        if(typeof num !== "number") return console.error(`El valor "${num}" ingresado, NO es un número`)
    }
    return console.info(
        arr.reduce((total,num,index,arr)=>{
            total+=num;
            if(index===arr.length-1)return `El promedio de ${arr.join(" + ")} es ${total/arr.length}`
            else return total;
        })
    )
}