<?php
require('fpdf.php');

class PDF extends FPDF
{
// Load data
function LoadData($file)
{
    // Read file lines
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.2);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
        $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherroutine";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{	
        $this->Cell($w[0],6,$row['id'],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row['name'],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row['class'],'LR',0,'R',$fill);
        $this->Cell($w[3],6,$row['section'],'LR',0,'R',$fill); 
        $this->Ln();
        $fill = !$fill;
    
	}
	}
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
function FancyTable2($header2, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.2);
    $this->SetFont('','B');

    // Header
    $w = array(40, 35,40);
    for($i=0;$i<count($header2);$i++)
        $this->Cell($w[$i],7,$header2[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
        $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teachersub";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{	
        $this->Cell($w[0],6,$row['id'],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row['name'],'LR',0,'L',$fill);
		$this->Cell($w[2],6,$row['subject'],'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    
	}
	}
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

}
$pdf = new PDF();
// Column headings
$header = array('ID', 'NAME', 'CLASS', 'SECTION');
$header2 = array('ID','NAME', 'SUBJECTS');
// Data loading
$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->AddPage();
$pdf->FancyTable2($header2,$data);
ob_end_clean();
$pdf->Output();
?>