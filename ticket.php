
<?php
require_once 'conexion.php';
require_once 'generar_ticket.php';
$id = $_POST['id'];
$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$nombre_c = $_POST['nombre_c'];
$rfc_c = $_POST['rfc_c'];
$correo = $_POST['mail'];
$pago = $_POST['pago'];
$direccion = $_POST['address'];
$descripcion = $_POST['descripcion'];
$iva = $_POST['iva'];
$descuento = $_POST['descuento'];
$total = $_POST['total'];
$fecha= $_POST['fecha']; 
$cantidad = $_POST['cantidad'];
$importe = $_POST['importe'];



$sql = "INSERT INTO ticket (idTicket,FECHA,NOMBRE_E,RFC_E,DIRECCION_E,NOMBRE_C,RFC_C,CORREO_C,CANTIDAD,DESCRIPCION,IMPORTE,DESCUENTO,IVA,TOTAL,PAGO) 
VALUES ('$id','$fecha','$nombre','$rfc','$direccion','$nombre_c','$rfc_c','$correo','$cantidad','$descripcion','$importe','$descuento','$iva','$total','$pago')";

$resultado = mysqli_query($mysqli,$sql);
if($resultado){
    Ticket($id,$fecha,$nombre,$rfc,$direccion,$nombre_c,$rfc_c,$correo,$cantidad,$descripcion,$importe,$descuento,$iva,$total,$pago);
}
$mysqli->close();


