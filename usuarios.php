<?php
require_once 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$contraseña = $_POST['password'];

$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios(nombre,apellido,correo,contraseña,telefono) 
VALUES ('$nombre','$apellido','$correo','$contraseña_hash','$telefono')";


$resultado = mysqli_query($mysqli,$sql);
if($resultado){
   echo 'Exito';
}
$mysqli->close();