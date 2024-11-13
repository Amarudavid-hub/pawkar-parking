
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/ingreso_auto.css">
        
        <link rel="stylesheet" href="../css/tabla.css">
        
        
       

        
        <title>INGRESOS</title>
        <link rel="icon" href="../IMG/FLOR.PNG">
    </head>
    <body>
        <header>
            <div class="left-header">
                <div class="menuButton">
                    <img src="../IMG/FLOR.png" alt="">
                    <div id="myLinks">
                        <a href="ParkingEntrada.php">INICIO</a>
                        <a href="ingresos.php">INGRESOS</a>
                        <a href="#news">SALIDAS</a>
                       
                       
                        
                        
                       
                     
                    </div>
                </div>
                <div class="enlinea">
                    <h1>EN LINEA :</h1>
                    <img class="icon" src="../IMG/Parking-Symbol-PNG-File.png" alt="icon-picture" />
                    <h1 class="employee-position">INGRESOS</h1>
                </div>
            </div>
            <div class="right-header">
                <h2 id="dateSection"></h2>
                <h2 id="clockSection"></h2>

            </div>

            

        </header>

            
                    
            
        <script src="../JS/juanReloj.js"></script>

  
   

      

    </body>
</html>
    

    
</body>
</html>
<?php
 
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
$bd = "entrada_autos";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass, $bd);

//hacemos llamado al imput de formuario
$numero_de_placa = $_POST["numero_de_placa"] ;
$nombre = $_POST["nombre"] ;
$fecha = $_POST["fecha"] ;

//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "entrada_autos";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO tabla_form (numero_de_placa, nombre, fecha)
                             VALUES ('$numero_de_placa','$nombre','$fecha')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM tabla_form";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Numero_de_placa</th></h1>";
echo "<th><h1>nombre</th></h1>";
echo "<th><h1>fecha</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['numero_de_placa']. "</td></h2>";
    echo "<td><h2>" . $colum['nombre'] . "</td></h2>";
    echo "<td><h2>" . $colum['fecha'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="ParkingEntrada.php"> Volver Atrás</a>';


?>

