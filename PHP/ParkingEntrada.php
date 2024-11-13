<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/ingreso_auto.css">
        <link rel="stylesheet" href="../css/principal.css">
        <title>Parking Entrada</title>
        <link rel="icon" href="../IMG/FLOR.PNG">
    </head>
    <body>
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
        <form class="ingresarForm">
            <!-- <form action="../PHP/ingreso_entrada.php" method="post"> -->
                <label for="placa">INGRESE PLACA DE VEHICULO</label>
                <input type="text" id="placa" name="placa" />
                <div class="sub-container">
                    <label for="">NOMBRE DEL PROPIETARIO</label>
                    <input type="text" id="nombre" name="nombre" />
                    <div>
                        <style>
		                 @media only screen and (max-width: 700px) {
			            video {
				            max-width: 100%;
			                    }
		                        }
	                    </style> 
		                <select name="listaDeDispositivos" id="listaDeDispositivos"></select>
		                <button id="boton">Tomar foto</button>
		                <p id="estado"></p>
	                </div>
	                    <br>
	                    <video muted="muted" id="video"></video>
	                    <canvas id="canvas" style="display: none;"></canvas>

                    <div class="right-header">
                        <h2 id="dateSection"></h2>
                         <h2 id="clockSection"></h2>
                     </div>
                </div>
                <h3>HORA</h3>
                 <h1 id="inngresarCaroHora">03:05:49 PM</h1>

                <h3>FECHA</h3>
                <h1 class="form-day" id="ingresarCaroDia">martes, 7 septiembre de 2024</h1>    
                <button>INGRESAR</button>
        </form>
        </main>
       
          
         <script src="https://cdnjs.cloudflare.com/ajax/libs/tesseract.js/4.1.2/tesseract.min.js"></script>
       
        <script src="../JS/juanReloj.js"></script>
        <script src="../JS/juanIngresoDeCaro.js"></script>
        <script src="../JS/camara.js"></script>

    </body>
</html>