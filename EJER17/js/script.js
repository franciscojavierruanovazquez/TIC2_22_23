function inicio() {
    //alert(document.getElementById("usuario").value);
    /*var usu = prompt("Introduzca su nombre:");
    alert("Hola " + usu);
    document.getElementById("usuario").value = usu;*/

    /*var radios = document.getElementsByName("valores");
    for(let i=0;i<radios.length;i++) {
        alert(radios[i].value);
    }*/

    //document.getElementsByTagName("p")[0].innerHTML = "Primer Párrafo";

    //document.getElementsByClassName("clase")[1].onclick = aviso("Has Pulsado el Párrafo");

    var coleccion = document.querySelectorAll("#principal p");
    var coleccion = document.getElementById("principal").querySelectorAll("p");
    for(let i=0;i<coleccion.length;i++) {
        coleccion[i].innerHTML = "Párrafo posición " + i;
    }
}

function aviso(mensaje) {
    alert(mensaje);
}

function mostrarMensaje() {
    var usu = prompt("Introduzca su nombre:");
    document.getElementById("texto").innerHTML = usu;
    //document.getElementById("texto").style = "color:red;border: 1px solid blue";
    document.getElementById("texto").className = "bordeYColor";
}

function ocultar() {
    document.getElementById("principal").style="display: none";
}

function mostrar() {
    document.getElementById("principal").style="display: block";
}

window.addEventListener("load", inicio, false);