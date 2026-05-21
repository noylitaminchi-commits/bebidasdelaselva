<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$total = $cantidad * $precio;
?>

<!DOCTYPE html>
<html>
<head>
<title>Boleta</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="contenedor">

<img src="imagenes/logo.png" width="120">

<h2>BOLETA DE VENTA</h2>

<p><b>Cliente:</b> <?php echo $cliente; ?></p>
<p><b>Producto:</b> <?php echo $producto; ?></p>
<p><b>Cantidad:</b> <?php echo $cantidad; ?></p>
<p><b>Precio:</b> S/ <?php echo $precio; ?></p>
<p><b>Total:</b> S/ <?php echo $total; ?></p>

<br>

<button onclick="window.print()">Imprimir Boleta</button>

<br><br>

<a href="ventas.php">Volver</a>

</div>

</body>
</html>