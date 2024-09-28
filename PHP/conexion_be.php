<?php


$server="localhost";
$user="root";
$pass="";
$bd_1="test";

$conexion=new mysqli($server,$user,password: $pass,$bd_1);
if($conexion->connect_erno){
    die("conexion faliida" . $conexion->connect_erno);
    
}else{
    echo"conectadoOOOOOOO";
}






?>