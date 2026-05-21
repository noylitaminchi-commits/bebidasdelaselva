<?php
include('conexion.php');

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename=\"ventas.csv\"');

$salida = fopen('php://output', 'w');

fputcsv($salida,
array('ID','Cliente','Producto','Cantidad','Precio','Total'));

$query = mysqli_query($conn,"SELECT * FROM ventas");

while($fila = mysqli_fetch_assoc($query)){

fputcsv($salida,$fila);

}
?>