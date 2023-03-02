<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP05</title>
</head>
<body>
    <p>
        Contador de Visitas
    </p>
    <?php
        // Vamos a guardar el contador de visitas en un archivo externo dentro de la carpeta
        // del proyecto
        $fichero = fopen("contador.txt", "r+"); // abrimos el fichero en modo lectura y escritura
        $visitas = fgets($fichero, 7); // Leemos los 7 primeros bytes
        echo $visitas; // Mostramos en la web el contador de visitas
        $visitas++; // incrementamos el contador en 1 $visitas = $visitas + 1
        rewind($fichero); // sitúo el cursos al inicio del fichero para escribir encima del número
        fputs($fichero, $visitas); // escribo en el fichero en la posición del cursos el valor del contador de visitas
        fclose($fichero); // cierro el fichero
    ?>
</body>
</html>