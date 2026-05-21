<?php
include("conexion.php");

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=ventas.xls");

?>

<table border="1">

<tr>
<th>ID</th>
<th>Cliente</th>
<th>Producto</th>
<th>Cantidad</th>
<th>Precio</th>
<th>Total</th>
</tr>

<?php
$query = mysqli_query($conn,"SELECT * FROM ventas");

while($fila = mysqli_fetch_assoc($query)){
?>

<tr>

<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['cliente']; ?></td>
<td><?php echo $fila['producto']; ?></td>
<td><?php echo $fila['cantidad']; ?></td>
<td><?php echo $fila['precio']; ?></td>
<td><?php echo $fila['total']; ?></td>

</tr>

<?php } ?>

</table>