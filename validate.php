<?php
require_once 'conexion.php';

$correo = $_POST['correo'];
$contraseña = $_POST['password'];

$consulta =  "SELECT contraseña FROM usuarios WHERE correo='$correo'";
$resultado = $mysqli->query($consulta);

while ($row = $resultado->fetch_assoc()){
    if(password_verify($contraseña,$row['contraseña'])){
        echo 'Iniciando sesion';
    }else{
        echo 'error';
    }
}

 