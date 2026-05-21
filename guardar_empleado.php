<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO empleados(nombre,cargo,telefono)
VALUES('$nombre','$cargo','$telefono')";

mysqli_query($conn,$sql);

header("Location: empleados.php");
?>