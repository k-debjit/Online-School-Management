<?php
session_start();
include_once("a_header.php");
include_once("code.php");
?>
<table align="center">

  <td><h1 style="border-bottom:dotted">Please Enter The Id Number</h1></td>
                    

</tr>
<tr>
<td><input name="id" type="text" /></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="Show" /></td>
</tr>

</table>

	<?php
	
	if(isset($_POST['submit']))
	{
		$_SESSION['id']=$_POST['id'];
		data();
		
	}
?>




<?php

	/* using database
	
	$x=$row['id'];
	$row1=duplicate();
    $old=go();
	*/
	

                      ?>
	
	

<?php
include_once("footer2.php");
?>