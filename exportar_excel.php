<?php
include('conexion.php');

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=productos.xls");

?>

<table border="1">
<tr>
<th>ID</th>
<th>Producto</th>
<th>Stock</th>
<th>Precio</th>
</tr>

<?php
$query = mysqli_query($conn,"SELECT * FROM productos");

while($fila = mysqli_fetch_assoc($query)){
?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['stock']; ?></td>
<td><?php echo $fila['precio']; ?></td>
</tr>

<?php } ?>

</table>