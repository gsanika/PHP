<?php
require('C:/xampp/htdocs/sanika/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->setFont('Arial','B',16);
$pdf->Cell(40,10,'Hello world');
$pdf->Output();

?>