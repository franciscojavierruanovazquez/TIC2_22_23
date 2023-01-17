function ordenar() {
    var n1 = parseInt(document.getElementById("num1").value);
    var n2 = parseInt(document.getElementById("num2").value);
    var n3 = parseInt(document.getElementById("num3").value);

    var orden = "";

    if ((n1 > n2) && (n1 > n3)) {
        if (n2 > n3) {
            orden = n1 + " > " + n2 + " > " + n3;
        } else {
            orden = n1 + " > " + n3 + " > " + n2;
        }
    } else if ((n2 > n1) && (n2 > n3)) {
        if (n1 > n3) {
            orden = n2 + " > " + n1 + " > " + n3;
        } else {
            orden = n2 + " > " + n3 + " > " + n1;
        }
    } else {
        if (n2 > n1) {
            orden = n3 + " > " + n2 + " > " + n1;
        } else {
            orden = n3 + " > " + n1 + " > " + n2;
        }
    }
    document.getElementById("resultado").innerHTML = orden;
}