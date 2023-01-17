var aleatorio = parseInt((Math.random() * 10)) + 1;

var intentos = 3;

function comprobar() {
    var num = parseInt(document.getElementById("numero").value);

    var mensaje = "";

    if (num > aleatorio) {
        mensaje = "Te has pasado";
    } else if (num < aleatorio) {
        mensaje = "No has llegado";
    } else {
        mensaje = "Correcto!!!";
    }

    document.getElementById("resultado").innerHTML = mensaje;
}