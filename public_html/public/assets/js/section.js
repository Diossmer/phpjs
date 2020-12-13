$(document).ready(function () {
    $('.linkmenu').on('click', function () {
        $('header').toggleClass('hide-menu');
    });
});

//JAVASCRIPT
/*var myobject={
    metodo:function(){
        console.log("Hello");
    },
    propiedad:"Diossmer"
};
myobject.metodo();
console.log(myobject.propiedad);*/
//JQUERY
/*
$(function () {
    $('.linkmenu').on('click', function () {
        $('header').toggleClass('hide-menu');
    });
    */
/*
$(document).ready(function () {
    var $miDiv = prompt("Su nombre", 'Nombre');
    $('.login-in li:first').next().html($miDiv);
});
});
$(function () {
    $('.titulo').bind({
        'click': function () { alert('Multifuncion'); },
        'mouseover': function () { alert("sobrepasado"); }
    });
});
$(function () {
    $('.logeo').mouseover(function () {
        $('.logeo').fadeOut(500, function () {
            $('.foot').append("ELEMENTO MUERTO"),
                $(this).remove();
        })
    });
});
*/
/*
$(function () {
    $('header').animate({
        opacity: 0.25,
        // left: "+40",
        right: "+=50",
        bottom: "-100",
        height: "510%"
        // top: "+20"
    }, 300,
        function () {
            // alert('Realizado');
            $('header').hide("slow").delay(2000).show("slow", function () {
                alert("Event finish");
            });
        });
});
*/
// funciones no anonimas
/*
var clickboton = function clickBotonuno() {
    $('.linkmenu').fadeOut("slow").delay(2000).fadeIn("slow");
}
$('.linkmenu').click(clickboton);
*/
/*
var clickboton = function clickBotonuno() {
    $('.linkmenu').fadeTo(500, 0).delay(2000).fadeTo(500, 1, function () {
        alert("Pagina 21 Para terminar, efecto slideToggle()")
    });
}
$('.linkmenu').click(clickboton);
*/
/*
$(function () {
    $(".titulo").draggable();
});*/
/*$(function () {
    $(".linkmenu").accordion();
});*/
/*
$(function () {
    var buscar = [
        "Arturo",
        "Arnaldo",
        "Bruno",
        "Bruto",
        "Carlos",
        "Catira",
        "Dolar",
        "Diana",
    ];
    $(".content-card").autocomplete({ source: buscar });
});
*/
/*
$(function () {
    $('.dialogform').dialog({
        autoOpen: false,
        modal: true,
        show: "blind",
        hide: "explode",
    });
    $('.fa-search').dialog("open");
});*/
var titulo = new Vue({
    el: '.titulo',
    data: {
        message: 'Prueba: ' + new Date().toLocaleString()
    }
})
/*
$(".linkmenu").click(function (evento) {
    $(".menu").toggle(fade);
});
*/
/*
$(document).ready(function () {
    $("a").click(function (evento) {
        alert("Has pulsado el enlace, pero vamos a cancelar el evento...Por tanto, no vamos a llevarte a DesarrolloWeb.com");
        evento.preventDefault();
    });
});
*/
/*
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
*/
