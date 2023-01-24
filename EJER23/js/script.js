function validar(campoNombre) {
    var nombre = campoNombre.value;
    if (nombre == null || nombre == "" || nombre.length == 0) {
        //campoNombre.style = "border: 2px solid red";
        campoNombre.focus();

        mostrarError("spnombre", "Error: nombre vacío");
    } else {
        //campoNombre.style = "";

        borrarError("spnombre");
    }
}

function mostrarError(campo, mensaje) {
    document.getElementById(campo).innerHTML = mensaje;
}

function borrarError(campo) {
    document.getElementById(campo).innerHTML = "";
}

function validarFormulario() {
    var cadenaError = "<ul>";

    // Busco los posibles errores
    var nombre = document.getElementById("nombre").value;
    if (nombre == null || nombre.length == 0 || nombre == "") {
        cadenaError += "<li>Error: nombre vacío</li>";
    }

    var postal = document.getElementById("postal").value;
    if (postal == null || postal.length == 0 || postal == "") {
        cadenaError += "<li>Error: código postal vacío</li>";
    } else if (postal.length != 5) {
        cadenaError += "<li>Error: código postal de 5 cifras</li>";
    }

    var tel = document.getElementById("telefono").value;
    if (tel == null || tel.length == 0 || tel == "") {
        cadenaError += "<li>Error: teléfono vacío</li>";
    } else if (tel.length != 9) {
        cadenaError += "<li>Error: teléfono de 9 cifras</li>";
    } else if (!tel.startsWith(9) && !tel.startsWith(8) && !tel.startsWith(6)) {
        cadenaError += "<li>Error: teléfono debe comenzar por 9, 8 o 6</li>";
    }

    //cadenaError = cadenaError + "</ul>";
    cadenaError += "</ul>";

    // Preguntamos si cadenaError es distinto de 9 porque si no tiene errores
    // solo tendrá el <ul></ul> que son 9 caracteres
    if (cadenaError.length != 9) {
        // Si tiene errores
        document.getElementById("capaerrores").style.display = "block";
        mostrarError("sperrores", cadenaError);
        return false;
    } else {
        // No tiene errores
        return true;
    }    
}

function mostrarEdad(campo) {
    document.getElementById("spedad").innerHTML = campo.value;
}