<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$stock = $_POST['stock'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(nombre,stock,precio)
VALUES('$nombre','$stock','$precio')";

mysqli_query($conn,$sql);

header("Location: inventario.php");
?>