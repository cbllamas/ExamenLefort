<?php
include_once "configuraciones/cors.php";
include_once "funciones.php";
$reporte = obtenerReporte();
echo json_encode($reporte);
?>