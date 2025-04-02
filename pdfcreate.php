<?php
require('fpdf186\fpdf.php');  

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello, world!',1,1,'C');
$pdf->Output();
?>
