<?php
include('conexion.php');

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="productos.csv"');

$salida = fopen('php://output', 'w');

fputcsv($salida, array('ID','Producto','Stock','Precio'));

$query = mysqli_query($conn,"SELECT * FROM productos");

while($fila = mysqli_fetch_assoc($query)){
    fputcsv($salida, $fila);
}
?>