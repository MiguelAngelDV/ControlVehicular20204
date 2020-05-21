<?php
    require('fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage('P','Legal');
    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'TIPO DE SERVICIO','',0,'L');
    $pdf->Cell(17,2,'HOLOGRAMA','',0,'L');
    $pdf->Cell(17,2,'FOLIO','',0,'L');
    $pdf->Cell(17,2,'VIGENCIA','',0,'L');
    $pdf->Cell(17,2,'PLACA','',1,'L');

    $pdf->SetFont('Arial','',4);
    $pdf->Cell(17,2, 'Uso' ,'',0,'L');
    $pdf->Cell(17,2,'','',0,'L');
    $pdf->Cell(17,2, 'idVehiculo' ,'',0,'L');
    $pdf->Cell(17,2,'INDEFINIDA','',0,'L');
    $pdf->SetFont('Arial','B',5);
    $pdf->Cell(17,2, 'Placa' ,'',1,'L');

    $pdf->SetFont('Arial','',3);
    $pdf->Cell(15,2,'PROPIETARIO','',0,'L');
    $pdf->SetFont('Arial','',4);
    $pdf->Cell(60,2,   'Nombre' ,'',1,'L');

    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'RFC','',0,'L');
    $pdf->Cell(17,2,'NUMERO DE SERIE','',0,'L');
    $pdf->Cell(17,2,'MODELO','',1,'L');

    $pdf->SetFont('Arial','',4);
    $pdf->Cell(17,2,   'RFC' ,'',0,'L');
    $pdf->Cell(17,2,   'Serie' ,'',0,'L');
    $pdf->Cell(17,2,   'Modelo' ,'',1,'L');

    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'LOCALIDAD','',0,'L');
    $pdf->Cell(17,2,'MARCA/LINEA/SUBLINEA','',0,'L');
    $pdf->Cell(17,2,'OPERACION','',1,'L');

    $pdf->SetFont('Arial','',4);
    $pdf->Cell(17,2, 'Direccion' ,'',0,'L');
    $pdf->Cell(17,2, 'Marca' ."/". 'Linea' ."/".'Sublinea' ,'',0,'L');
    $pdf->Cell(17,2,'2017/2104540*','',1,'L');

    $pdf->SetFont('Arial','',4);
    $pdf->Cell(17,2,'','',0,'L');
    $pdf->Cell(17,2, 'Transmision'." MOTOR ".'numMotor' ,'',0,'L');

    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'FOLIO','',1,'L');
    $pdf->Cell(17,2,'MUNICIPIO','',0,'L');

    $pdf->SetFont('Arial','',4);
    $pdf->Cell(17,2,'LTS., 4 VEL., 4 CIL','',0,'L');
    $pdf->Cell(17,2,'A 1598987','',1,'L');

    $pdf->Cell(17,2,'QUERETARO','',0,'L');
    $pdf->Cell(17,2,'','',0,'L');
    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'PLACA ANT.','',1,'L');

    $pdf->SetFont('Arial','',3);
    $pdf->Cell(17,2,'NUMERO DE CONSTANCIA','',0,'L');
    $pdf->Cell(8,2,'CILINDRAJE','',0,'L');
    $pdf->Cell(3,2, 'Cilindraje' ,'',0,'L');


    $pdf->Cell(17,2,'CLAVE VEHICULAR','',0,'L');
    $pdf->Cell(17,2,'FECHA DE EXPEDICION','',1,'L');

    $pdf->Cell(17,2,'DE INSCRIPCION (INCI)','',0,'L');
    $pdf->Cell(8,2,'CAPACIDAD','',0,'L');
    $pdf->Cell(3,2, 'capCarga' ,'',0,'L');

    $pdf->Cell(17,2,'0570906','',0,'L');
    $pdf->Cell(3,2,'11-MAY-20','',1,'L');

    $pdf->Cell(17,2,'','',0,'L');
    $pdf->Cell(8,2,'PUERTAS','',0,'L');
    $pdf->Cell(3,2, 'Puertas' ,'',0,'L');

    $pdf->Cell(8,2,'CLASE','',0,'L');
    $pdf->Cell(3,2,'1','',0,'L');

    $pdf->Cell(17,2,'OFICINA EXPEDIDORA','',0,'L');
    $pdf->Cell(3,2,'9','',1,'L');

    $pdf->Cell(17,2,'ORIGEN','',0,'L');
    $pdf->Cell(8,2,'ASIENTOS','',0,'L');
    $pdf->Cell(3,2,'5','',0,'L');
    $pdf->Cell(8,2,'TIPO','',0,'L');
    $pdf->Cell(3,2,'5','',0,'L');
    $pdf->Cell(17,2,'MOVIMIENTO','',1,'L');

    $pdf->Cell(17,2,'Origen' ,'',0,'L');
    $pdf->Cell(8,2,'COMBUSTIBLE','',0,'L');
    $pdf->Cell(3,2,'1','',0,'L');
    $pdf->Cell(8,2,'USO','',0,'L');
    $pdf->Cell(3,2,'36','',0,'L');
    $pdf->Cell(17,2,'ALTA PLACA','',1,'L');

    $pdf->Cell(17,2,'COLOR','',0,'L');
    $pdf->Cell(8,2,'TRANSMISION','',0,'L');
    $pdf->Cell(11,2,'RFA','',0,'L');
    $pdf->Cell(17,2,'NUMERO DE MOTOR','',1,'L');

    $pdf->Cell(17,2, 'Color' ,'',0,'L');
    $pdf->Cell(20,2, 'Transmision' ,'',0,'L');
    $pdf->Cell(17,2, 'numMotor' ,'',0,'L');

    $pdf->Cell(15,15, $pdf->image('qr.png',72,30,-270),0,'R');



    $pdf->Output();
?>