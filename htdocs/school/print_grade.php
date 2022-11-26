<?php
include_once("s_header.php");
$con=mysqli_connect('localhost','root','','school');
$query="select * from studentlist where roll='{$_GET['roll']}'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<table><tr><td>Welcome '{$row['name']}'</td></tr></table>";
echo"<table><tr><td><img src='{$row['photo']}'alt='image' width='100px'></td></tr></table>";
echo"<br><br><br><br>";
?>
<table align="center">
<tr>
<td><h1 style="border-bottom:dotted; font-family:'Comic Sans MS', cursive">Select the term to check report card</h1></td>
</tr>
<table align="center">
<tr>
<td><select name="term">
<option selected>1st term
<option>2nd term
<option>Final term
</select>
</td>
<td><input name="submit1" type="submit" value="submit" /></td>
</tr>
</table>
</table>

<?php
if(isset($_POST['submit1']))
{
	$con=mysqli_connect('localhost','root','','school');
	$query="select * from grade where roll='{$_GET['roll']}' and term='{$_POST['term']}'";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==0)
	echo "<table align='center'><td>No Record Found</td></table>";
	else
	{
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
	$con2=mysqli_connect('localhost','root','','school');
	$query2="select * from studentlist where roll='{$_GET['roll']}'";
	$result2=mysqli_query($con2,$query2);
	$row2=mysqli_fetch_assoc($result2);
	$this->Cell(30,10,'ROLL=',0,0,'C');
	$this->Cell(40,10,$row2['roll'],1,0,'C');
	$this->Ln(20);		
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.2);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40);
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

 	$query="select * from grade where roll='{$_GET['roll']}' and term='{$_POST['term']}'";
	$result=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
	{
		$this->Cell($w[0],6,$row['subject'],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row['grade'],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row['percentage'],'LR',0,'L',$fill);
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
$header = array('SUBJECT', 'GRADE', 'PERCENTAGE');
// Data loading
$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
ob_end_clean();
$pdf->Output();
}
}
?>



<?php
include_once("footer2.php");
?>