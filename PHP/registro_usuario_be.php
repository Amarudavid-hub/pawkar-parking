<?php
include'conexion_be.php';
$nombre_completo = $_POST['nombre_completo'];
$correo_electronico= $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


$query = "INSERT INTO usuarios(nombre_completo, correo_electronico, usuario, contrasena)
        VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena' )";





?>


