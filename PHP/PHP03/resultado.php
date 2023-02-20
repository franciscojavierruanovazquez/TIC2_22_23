<?php

$nombre = trim(
    htmlspecialchars(
        strip_tags($_REQUEST["nombre"]),
        ENT_QUOTES, "UTF-8")
    );

if ($nombre != "") {
    print "Su nombre es: " . $_REQUEST["nombre"] . "<br>";
}

if (isset($_REQUEST["opc"])) {
    print "Opción Marcada" . "<br>";
} else {
    print "Opción No Marcada" . "<br>";
}


echo "<br>";
print_r($_REQUEST);
print_r($_FILES);

?>