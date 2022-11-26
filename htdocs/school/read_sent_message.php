<?php
session_start();
include_once("header4.php");
echo "Welcome '{$_SESSION['username']}'";
echo"<br><br><br><br>";

?>

<table align="center">
<tr>
<?php

$con=mysqli_connect('localhost','root','','school');
if(mysqli_connect_error()=='')
{
	$query2="select * from message where messageid='{$_GET['id']}'";
	$result2=mysqli_query($con,$query2);
	$row=mysqli_fetch_assoc($result2);
	$query3="select * from susers where username='{$row['receiver']}'";
	$result3=mysqli_query($con,$query3);
	$num3=mysqli_num_rows($result3);
	$query4="select * from tusers where username='{$row['receiver']}'";
	$result4=mysqli_query($con,$query4);
	$num4=mysqli_num_rows($result4);
	if($num3!=0)
	$row1=mysqli_fetch_assoc($result3);
	else
	$row1=mysqli_fetch_assoc($result4);
	echo"
	
	<tr>
	<td style='border-bottom:dotted'>Receiver :-  '{$row['receiver']}'</td>
	</tr>
	<tr>
	<td><img src='{$row1['photo']}'alt='image' width='100px'></td>
	</tr>
	
	<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	
	<tr>
	<td style='border-bottom:dotted'>Title:-</td><td>{$row['title']}</td>
	</tr>
	<tr>
	<td style='border-bottom:dotted'>Time:-</td><td>".date('m/d/Y H:i:s' ,$row['timestamp'])."</td>
	</tr>
	<tr>
	<td>Message</td><td><textarea name='mes' cols='40' rows='5'>{$row['info']}</textarea></td>
	</tr>
	
	";
}
?>
</tr>
</table>


<?php
include_once("footer2.php");

?>