<?php
session_start();
include_once("a_header.php");

?>
<center>
<b><table style="font-family:'Comic Sans MS', cursive">
<tr>
<td>Select Class</td><td><select name="class">
<option selected>One
<option>Two
<option>Three
<option>Four
<option>Five
<option>Six
<option>Seven
<option>Eight
<option>Nine
<option>Ten
</select>
</td>
<td>Number of Subjects</td><td><select name="number">
<option selected>1
<option>2
<option>3
<option>4
<option>5
<option>6
<option>7
<option>8
<option>9
<option>10
<option>12

</select>
</td>

</tr>
<tr>
<td>
<input name="submit" type="submit" value="Add"/>
</td>
</tr>
</table>
</b>
</center>
<?php
if(isset($_POST['submit']))
{
	$_SESSION['cl']=$_POST['class'];
	$_SESSION['num']=$_POST['number'];
header("location:subject2.php");
}
?>
<?php
include_once("footer2.php");
?>