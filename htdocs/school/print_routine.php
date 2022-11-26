<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";
$con=mysqli_connect('localhost','root','','school');
if(mysqli_connect_error()=='')
	{
		$query1="select * from studentlist where roll='{$_GET['roll']}'";
		$result1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_assoc($result1);
		$query="select * from routine where class='{$row1['class']}' and section='{$row1['section']}'";
		$result=mysqli_query($con,$query);
		echo"<table align='center'><td>Routine of class '{$row1['class']}'</td></table>";
	if(mysqli_num_rows($result)==0)
	echo "No schedule has been developed yet";
else
{
echo "<table border='1' align='center'>
<tr><td>Day</td><td>10:30 A.M</td><td>11:15 A.M</td><td>12:00 A.M</td><td>12:45 P.M</td><td>1:30 P.M</td><td>Break</td><td>2:45 P.M</td><td>3:30 P.M</td><td>4:15 P.M</td></tr>";
	
while($row=mysqli_fetch_assoc($result))
{
echo"
<tr><td>{$row['day']}</td><td>{$row['sub1']}</td><td>{$row['sub2']}</td><td>{$row['sub3']}</td><td>{$row['sub4']}</td><td>{$row['sub5']}</td><td></td><td>{$row['sub6']}</td><td>{$row['sub7']}</td><td>{$row['sub8']}</td></tr>
";
}
}
	}
echo "</table>";
echo "</body>";
echo "</html>";
?>