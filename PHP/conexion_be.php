<!-- Juan Mysql: 12345 -->
<?php
$conexion = mysqli_connect("localhost", "root", "", "rol");

   if($conexion){
    echo'CONECTADO EXITOSAMENTE  LA BASE DE DATOS';
    }else{
        echo'NO SE PUEDE CONECTAR A LA BASE DE DATOS';
    
   }

   

?>