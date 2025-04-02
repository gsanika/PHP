<?php
require('fpdf.php');

class PDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Invoice', 0, 1, 'C');
    }
    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function Table($header, $data)
    {
        $this->SetFont('Arial', 'B', 12);
        foreach ($header as $col)
            $this->Cell(40, 7, $col, 1);
        $this->Ln();

        $this->SetFont('Arial', '', 12);
        foreach ($data as $row)
        {
            foreach ($row as $col)
                $this->Cell(40, 6, $col, 1);
            $this->Ln();
        }
    }
}

// Create a new PDF instance
$pdf = new PDF();
$pdf->AddPage();

// Header of the table
$header = ['Item', 'Description', 'Price'];

// Data of the table
$data = [
    ['Apple', 'Fresh red apple', '$1.20'],
    ['Banana', 'Fresh yellow banana', '$0.80'],
    ['Orange', 'Fresh orange fruit', '$1.50'],
];

$pdf->Table($header, $data);
$pdf->Output();
?>
