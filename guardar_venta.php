<?php
include("conexion.php");

$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$total = $cantidad * $precio;

$sql = "INSERT INTO ventas(cliente,producto,cantidad,precio,total)
VALUES('$cliente','$producto','$cantidad','$precio','$total')";

mysqli_query($conn,$sql);

header("Location: ventas.php");
?>