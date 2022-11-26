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
<td>STUDENT ROLL</td><td><select name="roll">
                   <?php
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query3="SELECT * FROM teacherroutine WHERE class='{$_SESSION['cls']}' AND section='{$_SESSION['secn']}' and id='{$_SESSION['id']}'";
		$result3=mysqli_query($con,$query3);
		if(mysqli_num_rows($result3)==0)
		{
		echo "<option>You don't have any student in this particular class with section</option>";
		}
		else
		{
		$query="SELECT * FROM studentlist WHERE class='{$_SESSION['cls']}' AND section='{$_SESSION['secn']}'";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<option>{$row['roll']}</option>";
		}
		}
	}
?>

</select></td>
</tr>
<tr>
<td>TERM</td><td><select name="term">
<option selected>1st term
<option>2nd term
<option>Final term
</select>
</td>
</tr>
<table align="center">
<?php

		$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
		$query="SELECT * FROM teachersub where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result))
	{

	echo "<tr><td>{$row['subject']}</td><td><select name='grade[]'>
	<option selected>A
	<option>B
	<option>C
	<option>D
	<option>F
	</select></td><td>Percentage</td><td><input name='percentage[]' type='text'/></td></tr>";
	
	}

	}
?>
</table>
<table align="center">
<tr>
<td><input name="submit" type="submit" value="submit" /></td>
</tr>
</table>
</table>

<?php
if(isset($_POST['submit']))
{
	$i=0;

	$grade=$_POST['grade'];
	
	$percentage=$_POST['percentage'];
	
	if(($percentage[$i])=='')
	{
	echo "";
	}
	else
	{	
		$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
		$que="delete from grade where roll='{$_POST['roll']}' and term='{$_POST['term']}'";
		$rst=mysqli_query($con,$que);


	$query="SELECT * FROM teachersub where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	$query1="insert into grade values('{$_POST['roll']}','{$_SESSION['cls']}','{$_POST['term']}','{$row['subject']}','{$grade[$i]}','{$percentage[$i]}')";
	$result1=mysqli_query($con,$query1);
	$i++;

	}
	echo"<table align='center'><td>Report card successfully updated</td></table>";
	}
	}

}
?>



<?php
include_once("footer2.php");
?>