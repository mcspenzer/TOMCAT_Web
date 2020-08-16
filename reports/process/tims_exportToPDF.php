<?php

require('../../assets/ext/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

// Logo
$pdf->Image('../../assets/img/tomcat.jpg',10,6,30);
$pdf->Cell(80);
// Title
$pdf->Cell(30,10,'TOMCAT INFORMATION MANAGEMENT SYSTEM',0,0,'C');


$pdf->Ln(25);


$pdf->Cell(15);

// Column widths
$w = array(40, 35, 40, 45);

// Set headers
$headers = array("Log ID", "Item Name", "Borrower", "Date Borrowed");

for ($i = 0; $i < count($headers); $i++) {
    $pdf->Cell($w[$i],7,$headers[$i],1,0,'C');
}

$pdf->Output();