<?php
include "configuraciones/conexion.php";

function obtenerReporte()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT sale.id, description AS producto, department AS departamento, price AS precio, sale.sale_date AS fechaVenta FROM customer INNER JOIN sale ON sale.customer_id = customer.id INNER JOIN sold_item ON sold_item.sale_id = sale.id ORDER BY FechaVenta DESC");
    return $sentencia->fetchAll();
}
?>