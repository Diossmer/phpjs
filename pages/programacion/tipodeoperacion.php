<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../include/header.php') ?>
</head>
<body>
    <div class="wrap">
        <header class="header">
            <div class="header_contenido">
                <nav class="navegation">
                </nav>
            </div>
        </header>
        <div class="contenido">
            <h1>Contenido Javascript <span class="tutorial">TUTORIAL</span></h1>
            <div class="texto">
                <script>
                // operadores aritmético
                /*Suma +
                Resta -
                Multiplicación *
                Potencia **
                Division(cociente) /
                Division(entera)resultado numero entero
                Division(resto) %
                */
                let a = (5+2)+2*2+(5-2);
                console.log(a,7+2*2);
                let b = (10-5)**(4-2)
                console.log(b)
                //operadores relacionales
                /*
                < menor a
                > mayor a
                = asignacion de variable
                <= menor o igual a
                >= mayor o igual a
                == igual comparacion de valores
                === igual comparacion de tipo de dato y de valor
                */
                console.log(7 === 7)
                console.log("7" === 7)
                console.log(0 === false)
                //operador unario(-) ternario(+)
                let i = 1
                i=i+2
                console.log(i)
                let o = 1
                o+=2
                console.log(o)
                //operadores Incremento y Decremento
                let j = 2
                j++
                j--
                ++j
                --j
                console.log(j)
                //operador lógico
                /*
                ! - Not:Niega y vuelve a verdadero a falso y viceversa
                || - Or:Cuando tengo 2 o más condiciones, con que una se cumpla, se valida a verdadero
                && - And:Cuando tengo 2 o mas condiciones Se nesecita que se valide el valor y tipo de dato verdadero
                */
                console.log(true)
                console.log(false)
                console.log(!true)
                console.log(!false)
                console.log(9 >= 2 || 9 <= 2)
                console.log(9 >= 2 && 9 <= 2)
                console.log(9 == 9 || "9" == 9)
                console.log(9 == 9 && "9" == 9)
                console.log(9 === 9 || "9"=== 9)
                console.log(9 === 9 && "9"=== 9)
                </script>
            </div>
        </div>
    </div>
</body>
</html>