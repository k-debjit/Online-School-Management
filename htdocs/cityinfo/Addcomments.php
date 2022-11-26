<?php
include_once("header.php");
?>
<div>

<table>
<tr>
<td>Enter Comment-Id</td><td><input name="comid" type="text" /></td>
</tr>
<tr>
<td>Enter the Place-Id</td><td><input name="placeid" type="text" /></td>
</tr>
<tr>
<td>Enter the User-Id</td><td><input name="userid" type="text" /></td>
</tr>

<tr>
<td>Comment-Description</td><td><textarea name="comdesc" cols="20" rows="5"></textarea></td>
</tr>
<tr>
<td>Comment-Date</td><td><input name="comdate" type="datetime" /></td>
</tr>
<tr>
<td>
<input name="Submit" type="submit" value="submit" />
</td>
</tr>
</table>

</div>
<?php
include_once("footer.php");
?>
<?php
if(isset($_POST['Submit']))
{
	
}
?>