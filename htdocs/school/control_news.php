<?php
include_once("a_header.php");
?>

<table align="center">
<tr>
<td>Select the Notice no.</td>
<td><select name="id">
<option selected>2
<option>3
<option>4
<option>5
<option>6
</select></td>
</tr>
<tr>
<td>Heading</td><td><input name="heading" type="text" /></td>
</tr>
<tr>
<td>Upload File</td><td><input name="upload" type="file" /></td>
</tr>
<tr>
<td>Moving message</td><td><input name="marq" type="text" /></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="submit" /></td>
</tr>
</table>

<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
	$path="news/".$_FILES['upload']['name'];
	$up=move_uploaded_file($_FILES['upload']['tmp_name'],"news/".$_FILES['upload']['name']);
	$heading=$_POST['heading'];
	$marq=$_POST['marq'];
	if($marq!='')
	{
		$query1="update notice set marq=NULL";
		$result1=mysqli_query($con,$query1);
		$query2="insert into notice (marq) values ('{$marq}')";
		$result2=mysqli_query($con,$query2);;
		}
		if($heading!='' && $up!='')
		{
		$query3="update notice set id=NULL, heading=NULL, note=NULL, timestamp=NULL where id='{$_POST['id']}'";
		$result3=mysqli_query($con,$query3);
		$query2="insert into notice (id,heading,note,timestamp) values ('{$_POST['id']}','{$heading}','{$path}','".time()."')";
		$result2=mysqli_query($con,$query2);;

		}
				echo"<table align='center'><td>Notice has been successfully updated</td></table>";

	}
}
?>


<?php
include_once("footer2.php");
?>