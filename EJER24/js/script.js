function calcularIMC() {
    var peso = document.getElementById("peso").value;
    var altura = document.getElementById("altura").value;

    var imc = peso / Math.pow(altura, 2);
    imc = Math.round(imc*100)/100; // Redondear con 2 decimales

    document.getElementById("resultado").innerHTML = "IMC: " + imc;

    var imagen = document.getElementById("imagenIMC");
    if (imc < 18.5) {
        imagen.src = "imagenes/p1.png";
    } else if (imc >= 18.5 && imc <= 24.9) {
        imagen.src = "imagenes/p2.png";
    } else if (imc >= 25 && imc <= 29.9) {
        imagen.src = "imagenes/p3.png";
    } else if (imc >= 30 && imc <= 34.9) {
        imagen.src = "imagenes/p4.png";
    } else {
        imagen.src = "imagenes/p5.png";
    }
}