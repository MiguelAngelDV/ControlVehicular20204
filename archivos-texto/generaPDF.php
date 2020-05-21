<?php
    include('../fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPAge();
    $pdf->SetFont("times", "B", "16");
    $pdf->Cell(60,20,"Desarrollo de Aplicaciones",1);
    $pdf->SetXY(80,80);
    $pdf->Cell(30,30, "Hola Señores",1,0);
    // $pdf->Image();
    $pdf->Output();
?>