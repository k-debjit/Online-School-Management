<?php
include_once("header.php");
include_once("code.php");
?>


<table>
<tr>
<td>Enter the City-Id</td><td><input name="cityid" type="text" /></td>
</tr>
<tr>
<td>Enter the City-Name</td><td><input name="cityname" type="text" /></td>
</tr>
<tr>
<td>Select your Photo to upload</td><td><input name="photo" type="file" /></td>
</tr>
<tr>
<td>
<input name="Submit" type="submit" value="submit" />
</td>
</tr>
</table>
<?php
if(isset($_POST['Submit']))
{
	$path="city/".$_FILES['photo']['name'];
	
	$up=move_uploaded_file($_FILES['photo']['tmp_name'],"city/".$_FILES['photo']['name']);
	if($up==true)
	addcity($_POST,$path);
}
?>


<?php
include_once("footer.php");
?>

