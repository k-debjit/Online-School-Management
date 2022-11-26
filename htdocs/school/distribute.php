<?php
session_start();
include_once("a_header.php");

?>
<table>
<tr>
<table align="center" style="font-family:'Comic Sans MS', cursive">
<tr>
<td style="border-bottom:dotted"><b>Select id to distribute classes</b></td>
</tr>
<table align="center">
<td style="font-size:18px" ><b>Teacher Id</b></td><td><select name="id1">
<?php

	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherlist";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
		
		echo "<option>{$row['id']}</option>";
		
	}
	}

?></select>
</table>
</td>
<table align="center">
<tr>
<td><input name="submit1" type="submit" value="Go" /></td>
</tr>
</table>
</tr>
</table>
<table align="center" style="font-family:'Comic Sans MS', cursive">
<tr>
<td style="border-bottom:dotted"><b>Select id to distribute subjects</b></td>
</tr>
<table align="center">
<td style="font-size:18px" >Teacher Id</td><td><select name="id2">
<?php

	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherlist";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
		
		echo "<option>{$row['id']}</option>";
		
	}
	}

?></select>
</table>
</td>
<table align="center">
<tr>
<td><input name="submit2" type="submit" value="Go" /></td>
</tr>
</table>
</tr>
</table>
</tr>
</table>

<?php
if(isset($_POST['submit1']))
{
	$_SESSION['id']=$_POST['id1'];
	header("location:distribute_class.php");
}
?>

<?php
if(isset($_POST['submit2']))
{
	$_SESSION['id']=$_POST['id2'];
	header("location:distribute_subject.php");
}
?>


<?php
include_once("footer2.php");
?>