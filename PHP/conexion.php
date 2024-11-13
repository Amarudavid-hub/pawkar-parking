<?php



$mysqli = new mysqli('localhost', 'root', '', 'entrada_autos');

if ($mysqli->connect_error) {
    echo 'Error de Conexión ' . $mysqli->connect_error;
    exit;
}