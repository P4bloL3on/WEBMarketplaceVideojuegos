<?php
include_once '../modelo/juegos.php';
include_once '../modelo/db.php';
include_once '../vista/busqueda.html';

$busqueda=$_GET["busqueda"];
$resultado= new buscar;
$resultado->buscador($busqueda);
