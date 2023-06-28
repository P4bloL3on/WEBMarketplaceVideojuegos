<?php
include_once '../modelo/user.php';
include_once '../modelo/db.php';

$nombre     =   $_POST["nombre"];
$usuario    =   $_POST["usuario"];
$contraseña =   $_POST["contraseña"];


$newUsuario = new user();  
$newUsuario->registro($nombre, $usuario, $contraseña);

header ('location: ../vista/home.php');