<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juegos</title>
</head>
<body>
<?php
include_once '../modelo/juegos.php';
include_once '../modelo/db.php';
include_once '../vista/juegos.html';

$juegos=new buscar;
$juegos->mostrarJuegos();

?>
</body>
</html>