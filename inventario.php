<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Inventario</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="contenedor">

<h2>Inventario de Productos</h2>

<form action="guardar_producto.php" method="POST">

<input type="text" name="nombre" placeholder="Producto" required>
<input type="number" name="stock" placeholder="Stock" required>
<input type="number" step="0.01" name="precio" placeholder="Precio" required>

<button type="submit">Guardar</button>

</form>

<table>
<tr>
<th>ID</th>
<th>Producto</th>
<th>Stock</th>
<th>Precio</th>
<th>Eliminar</th>
</tr>

<?php
$sql = "SELECT * FROM productos";
$resultado = mysqli_query($conn,$sql);

while($fila = mysqli_fetch_array($resultado)){
?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['stock']; ?></td>
<td>S/ <?php echo $fila['precio']; ?></td>
<td>
<a href="eliminar_producto.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
</td>
</tr>

<?php } ?>

</table>

<br>

<a href="exportar_csv.php">Exportar CSV</a>

<br><br>

<a href="principal.php">Volver</a>

</div>

</body>
</html>