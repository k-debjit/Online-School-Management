<?php
include_once("header.php");
include_once("code.php");
?>
<table>
  <tr>
    <td><?php
$result=selectplace($_GET['cityid']);
$row=mysqli_fetch_assoc($result);
echo "<img src='{$row['photo']}'alt='image' width='500px'>";
	
?> 
<div style="clear:both"></div></td><td><table>
<tr>
<td><b>placename:</b></td><td><?php
echo $row['placename'];
?></td></tr>
  <tr><td><b>placedescription : </b></td><td><?php
  echo $row['placedesc'];
  ?></td>
  </tr>
  </table>
</table>


<?php
include_once("footer.php");
?>