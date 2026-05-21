<?php
session_start();

if(!isset($_SESSION['usuario'])){
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Panel Principal</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="menu">

<img src="imagenes/logo.png" width="120">

<h1>Bienvenido Noyli</h1>

<a href="empleados.php">Empleados</a>
<a href="inventario.php">Inventario</a>
<a href="ventas.php">Ventas</a>
<a href="logout.php">Cerrar Sesión</a>

</div>

</body>
</html>