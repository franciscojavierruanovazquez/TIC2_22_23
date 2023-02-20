<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP04</title>
</head>
<body>
    <form action="comprobar.php">
        <table>
            <tr>
                <td>
                    <label for="pies">Pies</label>
                </td>
                <td>
                    <input type="number" name="pies" id="pies" autofocus>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pulgadas">Pulgadas</label>
                </td>
                <td>
                    <input type="number" name="pulgadas" id="pulgadas">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Calcular">
                </td>
            </tr>
            <?php
            if (isset($_REQUEST["mensaje"])) {
                print "<span>" . $_REQUEST["mensaje"] . "</span>";
            }
            ?>
        </table>
    </form>
</body>
</html>