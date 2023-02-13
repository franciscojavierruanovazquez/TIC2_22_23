function mostrarTablas() {
    for (let i = 1; i <= 10; i++) {
        // La variable i me dice la tabla en la que estamos
        var texto = ""; // contener el texto de todas las multiplicaciones
        for (let j = 1; j <= 10; j++) {
            // La variable j me mueve del 1 al 10 en la tabla i
            texto += i + " * " + j + " = " + (i*j) + "<br>";
        }
        document.getElementById("tabla" + i).innerHTML = texto;       
    }
}

function mostrar() {
    var num = document.getElementById("numero").value;
    var texto = "";
    for (let i = 1; i <= 10; i++) {
        texto += num + " * " + i + " = " + (num*i) + "<br>";
    }

    document.getElementById("resultado").innerHTML = texto;
}


window.addEventListener("load", mostrarTablas, false);