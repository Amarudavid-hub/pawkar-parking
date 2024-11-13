<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/ingreso_auto.css">
        <link rel="stylesheet" href="../css/entrada.css">
       
        
        
        
        


        
        <title>Parking Entrada</title>
        <link rel="icon" href="../IMG/FLOR.PNG">
    </head>
    <body>
    <?php
    date_default_timezone_set("America/Lima");
    $fecha=date("Y-m-d H:i");

    
    
    
    
    
    
    ?>




        <header>
            <div class="left-header">
                <div class="menuButton">
                    <img src="../IMG/FLOR.png" alt="">
                    <div id="myLinks">
                        <a href="#news">INICIO</a>
                        <a href="ingresos.php">INGRESOS</a>
                        <a href="#news">SALIDAS</a>
                       
                       
        
                    </div>
                </div>
                <div class="enlinea">
                    <h1>EN LINEA :</h1>
                    <img class="icon" src="../IMG/Parking-Symbol-PNG-File.png" alt="icon-picture" />
                    <h1 class="employee-position">Parking Entrada</h1>
                </div>
            </div>
            <div class="right-header">
                <h2 id="dateSection"></h2>
                <h2 id="clockSection"></h2>

            </div>

            

        </header>
        <main>
        <h1>Formulario de registro</h1>
    <form action="ingresos.php" name="" method="POST">
      <table border="0" align="center">
        <tr>
          <td>
            Ingrese el numero de placa:
          </td>
          <td>
            <label for="name"></label>
            <input type="text" name="numero_de_placa" id="name" required  />
          </td>
        </tr>
        <tr>
          <td>
            Nombre del Propetario:
          </td>
          <td>
            <label for="user"></label>
            <input type="text" name="nombre" id="name" required  />
          </td>
        </tr>
        <tr>
          <td>
            fecha de ingreso:
          </td>
          <td>
            <label for="name"></label>
            <input type="datetime" name="fecha" id="fecha"  value=" <?=$fecha?>"  required />
          </td>
        </tr>
        
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>

       



        <td align="center">
            <input
              type="submit"
              name="enviar"
              id="enviar"
              value="Ingresar auto"
            />
          </td>

        
         
          
        </tr>
      </table>
    </form>
      
               


            
		

             
                
               



                

                
            </form>
        </main>

        <div class="right-header">
                <h2 id="dateSection"></h2>
                <h2 id="clockSection"></h2>

                </div>
                <h3>HORA</h3>
                 <h1 id="inngresarCaroHora">03:05:49 PM</h1>

                <h3>FECHA</h3>

                <h1 class="form-day" id="ingresarCaroDia">martes, 7 septiembre de 2024</h1>    
                <button>INGRESAR</button>
        </form>
        </main>
       
          
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tesseract.js/4.1.2/tesseract.min.js"></script>

                <h1 class="form-day" id="ingresarCaroDia">martes, 7 septiembre de 2024</h1>
       
        <script src="../JS/juanReloj.js"></script>
        <script src="../JS/juanIngresoDeCaro.js"></script>
        

    </body>
</html>