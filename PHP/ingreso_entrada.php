<?php
$conexion = mysqli_connect("localhost", "root", "", "ingresos_autos");

if($conexion){
 echo'CONECTADO EXITOSAMENTE  LA BASE DE DATOS';
 }else{
     echo'NO SE PUEDE CONECTAR A LA BASE DE DATOS';
 
}
$nombre=$_POST['nombre'];
$placa=$_POST['placa'];
$sql="insert intro datos values('$nombre','$placa')";
$ejecutar=msql_query($conexion, $sql);






?>





