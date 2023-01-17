function calcular() {
    var base = parseInt(document.getElementById("base").value);
    var exp = parseInt(document.getElementById("exp").value);
    
    var final = Math.pow(base, exp);
    
    document.getElementById("resultado").innerHTML = 
        base + " elevado a " + exp + " es igual a " + final;
}