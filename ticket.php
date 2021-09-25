
<?php
require_once 'conexion.php';
require_once 'generar_ticket.php';
$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$correo = $_POST['mail'];
$pago = $_POST['pago'];
$direccion = $_POST['address'];
$descripcion = $_POST['descripcion'];
$iva = $_POST['iva'];
$descuento = $_POST['descuento'];
$total = $_POST['total'];
ini_set('date.timezone', 'America/Mexico_City');
$fecha= date("F j, Y, g:i a"); 


$sql = "INSERT INTO ticket (RFC,NOMBRE,CORREO,PAGO,DIRECCION,DESCRIPCION,IVA,DESCUENTO,TOTAL) 
VALUES ('$rfc','$nombre','$correo','$pago','$direccion','$descripcion','$iva','$descuento','$total')";

$resultado = mysqli_query($mysqli,$sql);
if($resultado){
    Ticket($rfc,$nombre,$correo,$pago,$direccion,$descripcion,$iva,$descuento,$total,$fecha);
}
$mysqli->close();


