<?php
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if($usuario == "noyli" && $clave == "isuiza"){

$_SESSION['usuario'] = $usuario;

header("Location: principal.php");

}else{

 echo "Usuario o contraseña incorrecta";

}
?>