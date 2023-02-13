<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP01</title>
</head>
<body>
    <?php
        echo "Hola";
        echo "<h3>Hola</h3>";
        print "<p>Este es otro hola</p>";

        // VARIABLES
        $saludo = "Holaaaaaaa";
        echo $saludo;

        echo "Esto es un saludo " . $saludo . " . Fin<br><br>";

        $a = 8;
        $b = 2;
        $res = $a + $b;
        echo $a + $b;
        echo "<br>";
        echo $res;

        $a = $a + 1;
        $a++;
        $a += 2;

        $tabla = ["uno", "dos"];
        $tabla2 = [["uno", "dos"],["tres", "cuatro"]];

        echo "<br>" . $tabla[0];
        echo "<br>" . $tabla2[1][0];

        $correcto = false;

        if ($correcto) {
            print "<p>Es correcto</p>";
        } else {
            print "<p>No es correcto</p>";
        }

        $numeros = [1,5,8,2,7];
        echo "<br>" . min($numeros);
        echo "<br>" . max($numeros);

        sort($numeros); // ordenamos la tabla
        print_r($numeros); // imprime en pantalla la tabla

        // CONSTANTES
        define("PI", 3.14);
        echo "<br>" . PI;

        echo "<pre>";
        print_r(get_defined_constants());
        echo "</pre>";

        echo "<br>" . PHP_EXTENSION_DIR;
    ?>

    <!--<input type="text" value="<?php echo $saludo?>">-->
</body>
</html>