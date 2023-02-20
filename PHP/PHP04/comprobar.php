<?php
$pies = trim(htmlspecialchars($_REQUEST["pies"], ENT_QUOTES, "UTF-8"));
$pulgadas = trim(htmlspecialchars($_REQUEST["pulgadas"], ENT_QUOTES, "UTF-8"));

if (empty($pies) && empty($pulgadas)) {
    header("Location: index.php?mensaje=Campos vacíos");
    //print "<p>Campos vacíos</p>";
} else {
    $cm = ($pies * 12 + $pulgadas) * 2.54;
    header("Location: index.php?mensaje=$pies pies y $pulgadas pulgadas son $cm centímetros");
    //print "<p>$pies pies y $pulgadas pulgadas son $cm centímetros</p>";
}
?>