<?php
session_start();
include_once("t_header.php");
$con=mysqli_connect('localhost','root','','school');
$query="select * from teacherlist where id='{$_SESSION['id']}'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<table><tr><td>Welcome '{$row['name']}'</td></tr></table>";
echo"<table><tr><td><img src='{$row['photo']}'alt='image' width='100px'></td></tr></table>";
echo"<br><br><br><br>";
?>
<table align="center">
<tr>
<td><input name="date" type="date"></td>
</tr>
<table align="center">
<tr>
<td style="font-size:18px"><b>Roll</b></td></td><td></td><td></td><td></td><td></td><td>
<td style="font-size:18px"><b>Attendance</b></td>

</tr>
<table align="center">
<tr>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
<td><b><input id='chkAllFiles' type='checkbox' title='All Files' onchange='selectAllFiles(this.checked)' />All
            Present</b></td>
</tr>

</table>
</table>

<table align="center">
                   <?php
				   $i=1;
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query3="SELECT * FROM teacherroutine WHERE class='{$_SESSION['cl']}' AND section='{$_SESSION['sec']}' and id='{$_SESSION['id']}'";
		$result3=mysqli_query($con,$query3);
		if(mysqli_num_rows($result3)==0)
		{
		echo "<td>You don't have any student in this particular class with section</td>";
		}
		else
		{
		$query="SELECT * FROM studentlist WHERE class='{$_SESSION['cl']}' AND section='{$_SESSION['sec']}'";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result))
		{

			echo"<tr><td>{$row['roll']}</td>
			</td><td></td><td></td><td>
			<td><input id='chkFile".$i."' type='radio' name='radio[$i]' value='Yes'>YES</td>
                  </td><td></td><td></td><td>
				  <td><input type='radio' name='radio[$i]' value='No'>NO</td></tr>";
				  $i++;
		}
		}
	}
?>

</table>

<table align="center">
<tr>
<td><input name="submit" type="submit" value="submit"/></td>
</tr>
</table>
</table>

<?php
if(isset($_POST['submit']))
{
	$present=$_POST['radio'];
	$j=1;
		$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{


	$query="SELECT * FROM studentlist WHERE class='{$_SESSION['cl']}' AND section='{$_SESSION['sec']}'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	$query1="insert into present values('{$row['roll']}','{$_SESSION['cl']}','{$_POST['date']}','{$present[$j]}')";
	$result1=mysqli_query($con,$query1);
	$j++;

	}
		echo"<table align='center'><td>Attendance successfully updated</td></table>";

	}
}
?>



<?php
include_once("footer2.php");
?>