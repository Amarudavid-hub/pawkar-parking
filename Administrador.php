<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./CSS/Administrador.css">
         <link rel="stylesheet" href="./css/ingresar.css">
        <title>Parking Pawkar Admin</title>
    </head>
    <body>
        <header>
            <div class="left-header">
                <div class="menuButton">
                    <img src="./IMG/FLOR.png" alt="">
                    <div id="myLinks">
                        <a href="#news">INICIO</a>
                        <a href="#contact">TARIFAS</a>
                        <a href="#about">INGRESAR</a>
                        <a href="#news">SALIDAS</a>
                        <a href="#contact">ABONADOS</a>
                        <a href="#about">CAJA</a>
                        <a href="#news">PAGOS</a>
                        <a href="#contact">REPORTES</a>
                        <a href="#about">USUARIOS</a>
                        <a href="#about">CONFIGURACIONES</a>
                    </div>
                </div>
                <div class="enlinea">
                    <h1>EN LINEA :</h1>
                    <img class="icon" src="./images/yellow_icon.jpg" alt="icon-picture" />
                    <h1 class="employee-position">ADMIN</h1>
                </div>
            </div>

            <div class="right-header">
                <h2 id="dateSection"></h2>
                <h2 id="clockSection"></h2>

            </div>

        </header>
        <main>
            <form class="ingresarForm">
                <label for="placa">INGRESE PLACA DE VEHICULO</label>
                <input type="text" id="placa" name="placa">
                <div class="sub-container">
                    <label for="classe_de_vehiculo">SELECIONE CLASSE DE VEHICULO</label>
                    <input type="text" id="classe_de_vehiculo" name="classe_de_vehiculo">
                </div>

                <h3>HORA</h3>
                <h1>03:05:49 PM</h1>

                <h3>FECHA</h3>
                <h1 class="form-day">martes, 7 septiembre de 2024</h1>

                <button>INGRESAR</button>
            </form>
        </main>
        <script src="./JS/juanReloj.js"></script>
    </body>
</html>