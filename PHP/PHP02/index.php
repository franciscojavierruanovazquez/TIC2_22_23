<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP02</title>
</head>
<body>
    <?php
    require("biblioteca.php");

    $hora = date("H");
    if ($hora >= 8 && $hora < 12) {
        echo "<p>Buenos días, </p>";
    } else if ($hora >= 12 && $hora <= 20) {
        echo "<p>Buenas tardes, </p>";
    } else {
        echo "<p>Buenas noches, </p>";
    }

    for ($i=1;$i<=100;$i++) {
        if ($i%2 == 0) {
                // PAR
                echo "<br>" . $i;
        }
    }

    imprimir("Mi Mensaje");

    echo calcularRaizCuadrada(25);
    ?>
</body>
</html>