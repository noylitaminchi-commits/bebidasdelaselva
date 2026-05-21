<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Ventas</title>

<link rel="stylesheet" href="css/estilo.css">

</head>
<body>

<div class="contenedor">

<img src="imagenes/logo.png" width="120">

<h2>REGISTRO DE VENTAS</h2>

<form action="guardar_venta.php" method="POST">

<input type="text" name="cliente" placeholder="Cliente" required>

<input type="text" name="producto" placeholder="Producto" required>

<input type="number" name="cantidad" placeholder="Cantidad" required>

<input type="number" step="0.01" name="precio" placeholder="Precio" required>

<button type="submit">
Guardar Venta
</button>

</form>

<br>

<table>

<tr>

<th>ID</th>
<th>Cliente</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
<th>Eliminar</th>

</tr>

<?php

$sql = "SELECT * FROM ventas";

$resultado = mysqli_query($conn,$sql);

while($fila = mysqli_fetch_array($resultado)){

?>

<tr>

<td><?php echo $fila['id']; ?></td>

<td><?php echo $fila['cliente']; ?></td>

<td><?php echo $fila['producto']; ?></td>

<td><?php echo $fila['cantidad']; ?></td>

<td>S/ <?php echo $fila['precio']; ?></td>

<td>S/ <?php echo $fila['total']; ?></td>

<td>

<a href="eliminar_venta.php?id=<?php echo $fila['id']; ?>">

Eliminar

</a>

</td>

</tr>

<?php } ?>

</table>

<br>

<a href="exportar_ventas_excel.php">

Exportar Excel

</a>

<a href="exportar_ventas_csv.php">

Exportar CSV

</a>

<br><br>

<a href="principal.php">

Volver

</a>

</div>

</body>
</html>