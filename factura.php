<?php
require 'conexion/conexion.php';
require('fpdf.php');

function Ticket($rfc,$nombre,$correo,$pago,$direccion,$descripcion,$iva,$descuento,$total){
    $consulta = "SELECT * FROM ventas";
    $resultado = $mysqli->query($consulta);
            class PDF extends FPDF
            {
            // Cabecera de página
            function Header()
            {
                // Logo
                $this->Image('img/logo.png',10,8,33);
                // Arial bold 15
                $this->SetFont('Arial','B',15);
                // Movernos a la derecha
                $this->Cell(80);
                // Título
                $this->Cell(100,10,utf8_decode('FACTURA ELECTRÓNICA (CFDI)'),1,0,'C');
                // Salto de línea
                $this->Ln(20);
            }

            // Pie de página
            function Footer()
            {
                // Posición: a 1,5 cm del final
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial','I',8);
                // Número de página
                $this->Cell(0,10,utf8_encode('Pagina').$this->PageNo().'/{nb}',0,0,'C');
            }
            }

            // Creación del objeto de la clase heredada
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);

            /** Llenar la factura con los datos de la base de datos*/


            while($row = $resultado->fetch_assoc()){
                $pdf -> Cell(120,10,utf8_decode('Número de factura'),1,1,'C');
                $pdf -> Cell(120,10,$row["numfactura"],1,1,'C');

                $pdf->MultiCell(0,15,"");

                $pdf->Cell(45,10,utf8_decode('RFC Emisor'),1,0,'C');
                $pdf->Cell(50,10,$row["rfcemisor"],1,0,'C',0);
                $pdf->Cell(45,10,utf8_decode('Nombre'),1,0,'C');
                $pdf->Cell(50,10,$row["nombremisor"],1,0,'C',0);

                $pdf->MultiCell(0,15,"");
                
                $pdf->Cell(45,10,utf8_decode('RFC Receptor'),1,0,'C');
                $pdf->Cell(50,10,$row["rfcreceptor"],1,0,'C',0);
                $pdf->Cell(45,10,utf8_decode('Nombre'),1,0,'C');
                $pdf->Cell(50,10,$row["nombrereceptor"],1,0,'C',0);

                
                $pdf->MultiCell(0,15,"");

                $pdf->Cell(45,10,utf8_decode('Fecha de emisión'),1,0,'C');
                $pdf->Cell(90,10,$row["fechaemision"],1,1,'C',0);
                $pdf->Cell(45,10,utf8_decode('Tipo de Comprobante'),1,0,'C');
                $pdf->Cell(90,10,$row["tipodecomprobante"],1,1,'C',0);
                $pdf->Cell(45,10,utf8_decode('Régimen Fiscal'),1,0,'C');
                $pdf->Cell(90,10,$row["regimenfiscal"],1,1,'C',0);

                $pdf->MultiCell(0,15,"");

                $pdf->Cell(35,10,utf8_decode('Clave de Producto'),1,0,'C');
                $pdf->Cell(25,10,utf8_decode('Cantidad'),1,0,'C');
                $pdf->Cell(75,10,utf8_decode('Descripción'),1,0,'C');
                $pdf->Cell(30,10,utf8_decode('Valor Unitario'),1,0,'C');
                $pdf->Cell(30,10,utf8_decode('Importe'),1,1,'C');

                $pdf->Cell(35,10,$row["claveproducto"],1,0,'C',0);
                $pdf->Cell(25,10,$row["cantidad"],1,0,'C',0);
                $pdf->Cell(75,10,$row["descripcion"],1,0,'C',0);
                $pdf->Cell(30,10,$row["valorunitario"],1,0,'C',0);
                $pdf->Cell(30,10,$row["importe"],1,1,'C',0);

                $pdf->Cell(130,10,utf8_encode("IVA"),1,0,'C');
                $pdf->Cell(65,10,$row["iva"],1,1,'C',0);

                $pdf->Cell(130,10,utf8_encode("Total"),1,0,'C');
                $pdf->Cell(65,10,$row["total"],1,1,'C',0);

                $pdf->MultiCell(0,15,"");

                $pdf->Cell(30,10,utf8_encode('Metodo de pago'),1,0,'C');
                $pdf->Cell(90,10,$row["metodopago"],1,1,'C',0);
                $pdf->Cell(30,10,utf8_encode("Forma de pago"),1,0,'C');
                $pdf->Cell(90,10,$row["formapago"],1,1,'C',0);
                $pdf->Cell(30,10,utf8_encode("Tipo de pago"),1,0,'C');
                $pdf->Cell(90,10,$row["tipopago"],1,1,'C',0);

                $pdf->Cell(30,10,utf8_encode("Sello Digital"),1,0,'C');
                $pdf->Cell(90,10,$row["sellodigital"],1,1,'C',0);


            }

}
$pdf->Output();