<?php

require 'conexion.php';
require 'PAWKAR-PARKING/fpdf/fpdf.php';
require 'helpers/NumeroALetras.php';

$idtabla_form = isset($_GET['id']) ? $mysqli->real_escape_string($_GET['id']) : 1;
$sqltabla_form = "SELECT numero_de]_placa, nombre,fecha FROM tabla_form WHERE id = $idtabla_form LIMIT 1";
$resultado = $mysqli->query($sqltabla_form);
$row_tabla_form = $resultado->fetch_assoc();




$pdf = new FPDF('P', 'mm', array(80, 200));
$pdf->AddPage();
$pdf->SetMargins(5, 5, 5);
$pdf->SetFont('Arial', 'B', 9);

$pdf->Image('img/pawkar.jpg', 15, 2, 45);

$pdf->output();



