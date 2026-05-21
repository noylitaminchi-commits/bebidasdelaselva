<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Empleados</title>
<link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="contenedor">

<h2>Registro de Empleados</h2>

<form action="guardar_empleado.php" method="POST">

<input type="text" name="nombre" placeholder="Nombre" required>
<input type="text" name="cargo" placeholder="Cargo" required>
<input type="text" name="telefono" placeholder="Teléfono" required>

<button type="submit">Guardar</button>

</form>

<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Cargo</th>
<th>Teléfono</th>
<th>Eliminar</th>
</tr>

<?php
$sql = "SELECT * FROM empleados";
$resultado = mysqli_query($conn,$sql);

while($fila = mysqli_fetch_array($resultado)){
?>

<tr>
<td><?php echo $fila['id']; ?></td>
<td><?php echo $fila['nombre']; ?></td>
<td><?php echo $fila['cargo']; ?></td>
<td><?php echo $fila['telefono']; ?></td>
<td>
<a href="eliminar_empleado.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
</td>
</tr>

<?php } ?>

</table>

<br>

<a href="principal.php">Volver</a>

</div>

</body>
</html>