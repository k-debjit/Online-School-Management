<?php
ob_start();
include_once("header2.php");
?>

<table>
                    <h1 style="border-bottom:dotted">Check Attendance</h1>
                    <tr>
                    <td>ROLL</td><td>
                    <input name="roll1" type="text"></td>
<td><input name="check1" type="submit" value="GO" /></td>

</tr>

</table>

<?php
if(isset($_POST['check1']))
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="select * from studentlist where roll='{$_POST['roll1']}'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if($num==0)
		echo "<table align='center'><td>Invalid Roll Number</td></table>";
		else
		header("location:print_attendance.php?roll={$_POST['roll1']}");
}
}
?>
<br/>

<table>
                    <h1 style="border-bottom:dotted">Check Report Card</h1>
                    <tr>
                    <td>ROLL</td><td>
                    <input name="roll2" type="text"></td>


<td><input name="check2" type="submit" value="GO" /></td>

</tr>

</table>

<?php
if(isset($_POST['check2']))
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="select * from studentlist where roll='{$_POST['roll2']}'";
		$result=mysqli_query($con,$query);
		$num=mysqli_num_rows($result);
		if($num==0)
		echo "<table align='center'><td>Invalid Roll Number</td></table>";
		else
		header("location:print_grade.php?roll={$_POST['roll2']}");
	}
}
?>


<?php
ob_end_flush();
include_once("footer2.php");
?>