<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP06</title>
</head>
<body>
    <p>
        Libro de visitas. Vamos a guardar los comentarios de los visitantes
    </p>
    <h2>Libro de Visitas</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="comentario">Comentario</label><textarea name="comentario" id="comentario"></textarea><br/>
        <label for="nombre">Nombre</label><input type="text" name="nombre" id="nombre"><br/>
        <label for="mail">Email</label><input type="email" name="mail" id="mail"><br/>
        <input type="submit" value="Publicar">
    </form>

    <h3>Mostrar Comentarios</h3>
    <?php
        $fichero = "visitas.txt";
        if (isset($_POST['comentario']) && isset($_POST['nombre']) && isset($_POST['mail'])) {
            // Crear variables para los datos
            $comentario = $_POST['comentario'];
            $nombre = $_POST['nombre'];
            $mail = $_POST['mail'];

            // Abrimos el archivo de visitas
            $f = fopen($fichero, "r+");

            // Leer y almacenar el contenido del fichero
            $datos = fread($f, filesize($fichero));

            // Crear la nueva entrada de la visita en el fichero
            $entrada = $nombre . " añade el comentario " 
                                        . $comentario . " con fecha " . date("d/m/Y") . " . Email: " . $mail . "<br>";

            // Colocar el cursor del fichero al principio
            rewind($f);

            // Escribir la entrada nueva y las antiguas en el fichero
            // \n es un salto de línea
            fputs($f, "$entrada \n $datos");

            // Cerrar el fichero
            fclose($f);
        }

        // Mostrar el contenido del fichero
        readfile($fichero);
    ?>

</body>
</html>