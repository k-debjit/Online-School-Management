<?php
include_once("header.php");
include_once("code.php");
?>
<?php
if(isset($_POST['Submit']))
{
	$path="place/".$_FILES['photo']['name'];
	$up=move_uploaded_file($_FILES['photo']['tmp_name'],"place/".$_FILES['photo']['name']);
	if($up==true)
	{
	addplace($_POST,$path);
}
}
?>
<table>
<tr>
<td>Enter the Place-Id</td>
<td><input name="placeid" type="text" value="<?php 

echo selectcountplace();

?>"/></td>
</tr>
<tr>
<td>Select City-Name</td>
<td><select name="cityname">
<?php
  $result=selectimage();

	while($row=mysqli_fetch_assoc($result))
	{
	
	   echo "<option value='{$row['cityid']}'> {$row['cityname']}  </option>";
	} 
?>

</select></td>
</tr>
<tr>
<td>Enter the Place-Name</td><td><input name="placename" type="text" /></td>
</tr>

<tr>
<td>Select your Photo to upload</td><td><input name="photo" type="file" /></td>
</tr>
<tr>
<td>Place-Description</td><td><textarea name="placedesc" cols="20" rows="5" ></textarea></td>
</tr>

<tr>
<td>
<input name="Submit" type="submit" value="Add" />
</td>
</tr>
</table>


<?php
include_once("footer.php");
?>
