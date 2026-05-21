<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM ventas WHERE id='$id'";

mysqli_query($conn,$sql);

header("Location: ventas.php");
?>