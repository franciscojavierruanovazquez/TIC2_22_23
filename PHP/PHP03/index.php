<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP03</title>
</head>
<body>
    <form action="resultado.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="nombre">Nombre</label>
                </td>
                <td>
                    <input type="text" name="nombre" id="nombre" autofocus>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="apellidos">Apellidos</label>
                </td>
                <td>
                    <input type="text" name="apellidos" id="apellidos">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Password</label>
                </td>
                <td>
                    <input type="password" name="pass" id="pass">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="opc">Opción</label>
                </td>
                <td>
                    <input type="checkbox" name="opc" id="opc">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dato">Dato</label>
                </td>
                <td>
                    <input type="radio" name="dato" id="dato" value="1" checked>Valor 1
                    <input type="radio" name="dato" id="dato" value="2">Valor 2
                </td>
            </tr>
            <tr>
                <td>
                    <label for="selec">Seleccion</label>
                </td>
                <td>
                    <select name="selec[]" id="selec" multiple>
                        <option value="1">UNO</option>
                        <option value="2">DOS</option>
                        <option value="3">TRES</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="fichero">Fichero</label>
                </td>
                <td>
                    <input type="file" name="fichero" id="fichero">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>