<?php
session_start();
include_once("a_header.php");
include_once("code.php");
?>

<table align="center">

  <td><h1 style="border-bottom:dotted">Please Enter The Roll Number</h1></td>
                    

</tr>
<tr>
<td><input name="roll" type="text" /></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Show" /></td>
</tr>

</table>

	<?php
	
	if(isset($_POST['submit']))
	{
		$_SESSION['roll']=$_POST['roll'];
		stdata();
		
	}
?>


	

<?php
include_once("footer2.php");
?>