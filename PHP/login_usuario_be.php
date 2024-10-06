<?php
include'conexion_be.php';

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();

echo $usuario;
echo $contraseña;


$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:Administrador.php");
    
}else
echo 'entrada';
if($filas['id_cargo']==2){ //Pentrada
header("location:ParkingEntrada.php");
}
else{
   ?>
    <?php     
include("index.php");
   ?>
   <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
} 






 
mysqli_free_result($resultado);
mysqli_close($conexion);
