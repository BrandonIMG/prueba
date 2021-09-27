<?php 
function  Ticket($id,$fecha,$nombre,$rfc,$direccion,$nombre_c,$rfc_c,$correo,$cantidad,$descripcion,$importe,$descuento,$iva,$total,$pago){
    require('fpdf.php');

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('img/logo.png',15,8,55);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(90,10,utf8_decode('FACTURA ELECTRÓNICA (CFDI)'),1,1,'C');
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

    $pdf->MultiCell(0,15,"");
    $pdf->Cell(45,10,utf8_decode('Numero de Factura'),1,0,'C');
    $pdf->Cell(50,10,$id,1,0,'C',0);
    $pdf->Cell(45,10,utf8_decode('Fecha de emisión'),1,0,'C');
    $pdf->Cell(50,10,$fecha,1,0,'C',0);

    
    $pdf->MultiCell(0,15,"");
    $pdf->Cell(45,10,utf8_decode('Nombre Emisor'),1,0,'C');
    $pdf->Cell(90,10,$nombre,1,1,'C',0);
    $pdf->Cell(45,10,utf8_decode('RFC Emisor'),1,0,'C');
    $pdf->Cell(90,10,$rfc,1,1,'C',0);
    $pdf->Cell(45,10,utf8_decode('Dirección Emisor'),1,0,'C');
    $pdf->Cell(90,10,$direccion,1,1,'C',0);

    $pdf->MultiCell(0,15,"");
    $pdf->Cell(45,10,utf8_decode('Nombre Cliente'),1,0,'C');
    $pdf->Cell(90,10,$nombre_c,1,1,'C',0);
    $pdf->Cell(45,10,utf8_decode('RFC Cliente'),1,0,'C');
    $pdf->Cell(90,10,$rfc_c,1,1,'C',0);
    $pdf->Cell(45,10,utf8_decode('Correo Cliente'),1,0,'C');
    $pdf->Cell(90,10,$correo,1,1,'C',0);

        $pdf->MultiCell(0,15,"");

        $pdf->Cell(50,10,utf8_decode('Cantidad'),1,0,'C');
        $pdf->Cell(75,10,utf8_decode('Descripción'),1,0,'C');
        $pdf->Cell(50,10,utf8_decode('Importe'),1,1,'C',0);
    
      
        $pdf->Cell(50,10,$cantidad,1,0,'C');
        $pdf->Cell(75,10,$descripcion,1,0,'C');
        $pdf->Cell(50,10,$importe,1,1,'C');

        $pdf->Cell(125,10,utf8_encode("Descuento $"),1,0,'C');
        $pdf->Cell(50,10,$descuento,1,1,'C',0);
    
        $pdf->Cell(125,10,utf8_encode("IVA $"),1,0,'C');
        $pdf->Cell(50,10,$iva,1,1,'C',0);
    
        $pdf->Cell(125,10,utf8_encode("Total a Pagar $"),1,0,'C');
        $pdf->Cell(50,10,$total,1,1,'C',0);

        $pdf->MultiCell(0,15,"");

        $pdf->Cell(30,10,utf8_encode('Metodo de pago'),1,0,'C');
        $pdf->Cell(90,10,$pago,1,1,'C',0);
        
      
        
       
      

        $pdf->Output();

}
