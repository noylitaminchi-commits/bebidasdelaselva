<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: inventario.php");
?>