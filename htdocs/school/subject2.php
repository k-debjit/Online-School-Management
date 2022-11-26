<?php
ob_start();
session_start();
include_once("a_header.php");

?>

<table align="center" style="font-family:'Comic Sans MS', cursive">
<?php
for($i=1;$i<=$_SESSION['num'];$i++)
{
echo"<tr><td>Subject No.$i</td><td><input name='subject$i' type='text'/></td></tr>";
}
if($_SESSION['num']<12)
{
	for($i=$_SESSION['num']+1;$i<=12;$i++)
	{
		echo"<td><input name='subject$i' type='hidden'></td>";
	}
}
?>
<tr>
<td><input name="submit" type="submit" value="submit"</td>
</tr>
</table>
<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
				$query1="DELETE FROM subject WHERE class='{$_SESSION['cl']}'";
		$result1=mysqli_query($con,$query1);

		$query="insert into subject values ('{$_SESSION['cl']}','{$_POST['subject1']}','{$_POST['subject2']}','{$_POST['subject3']}','{$_POST['subject4']}',
	'{$_POST['subject5']}','{$_POST['subject6']}','{$_POST['subject7']}','{$_POST['subject8']}','{$_POST['subject9']}',
		'{$_POST['subject10']}','{$_POST['subject11']}','{$_POST['subject12']}')";
		$result=mysqli_query($con,$query);
	}
		echo"<table align='center'><td>Sujectlist has been successfully updated</td></table>";
}
?>

<?php
ob_end_flush();
include_once("footer2.php");
?>