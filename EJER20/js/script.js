function mostrar() {
    var repe = document.getElementById("repe").value;
    var texto = document.getElementById("texto").value;
    
    var final = "";

    for (let i = 0; i < repe; i++) {
        final = final + texto + "<br>";        
    }
    
    document.getElementById("resultado").innerHTML = final;
}