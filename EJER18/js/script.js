function calcular() {
    var nombre = document.getElementById("nombre").value;
    var edad = document.getElementById("edad").value;

    var dias = edad * 365;

    document.getElementById("resultado").innerHTML = "Hola " 
            + nombre + ". Su edad es " + dias + " días";
}