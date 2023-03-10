<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 07</title>
</head>
<body>
    <h1> Album de Fotos </h1>
    <h5> Subir Archivo </h5>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo"><br/>
        <input type="submit" value="Subir">
    </form>

    <?php
    $ruta = "img/"; // Ruta de la carpeta para las imágenes
    if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
        // Si ha rellenado el archivo y el tamaño es mayor que 0
        $tamanyoMax = 7000000; // Tamaño máximo de las imágenes en bytes
        $nombreTemp = $_FILES['archivo']['tmp_name']; // Nombre temporal del fichero que necesitamos para subirlo
        $nombreArchivo = $_FILES['archivo']['name']; // Nombre real del archivo
        $tamanyoReal = $_FILES['archivo']['size']; // Tamaño real del archivo
        $tipoArchivo = getimagesize($nombreTemp); // Array de datos del archivo
        if ($tipoArchivo[2] == 1 || $tipoArchivo[2] == 2) {
            // GIF o JPG
            if ($tamanyoReal < $tamanyoMax) {
                if (move_uploaded_file($nombreTemp, $ruta . $nombreArchivo)) {
                    echo "<p>Archivo cargado con éxito</p>";
                } else {
                    echo "<p>Error al cargar el archivo</p>";
                }
            } else {
                echo "<p>Tamaño de archivo demasiado grande</p>";
            }
        } else {
            echo "<p>No es un archivo GIF o JPG</p>";
        }

    }
    ?>

    <h5> Mis fotos </h5>
    <?php
        $directorio = opendir($ruta); // Abro el directorio de imágenes
        while ($fichero = readdir($directorio)) {
            // Guardo en la variable fichero cada una de las imágenes del directorio img
            if ($fichero != "." && $fichero != "..") {
                echo "<img src='$ruta$fichero'>" . "<br/>"; // Muestro la imagen
            }
        }
        closedir($directorio); // Cierro el directorio
    ?>
</body>
</html>