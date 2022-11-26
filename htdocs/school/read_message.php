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
	$query1="UPDATE message SET seen='yes' WHERE seen='no' and messageid='{$_GET['id']}'";
	$result1=mysqli_query($con,$query1);
	$query2="select * from message where messageid='{$_GET['id']}'";
	$result2=mysqli_query($con,$query2);
	$row=mysqli_fetch_assoc($result2);
	$query3="select * from susers where username='{$row['sender']}'";
	$result3=mysqli_query($con,$query3);
	$num3=mysqli_num_rows($result3);
	$query4="select * from tusers where username='{$row['sender']}'";
	$result4=mysqli_query($con,$query4);
	$num4=mysqli_num_rows($result4);
	if($num3!=0)
	$row1=mysqli_fetch_assoc($result3);
	else
	$row1=mysqli_fetch_assoc($result4);
	echo"
	
	<tr>
	<td style='border-bottom:dotted'>Sender :-  '{$row['sender']}'</td>
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
<tr>
<td></td><td style="border-bottom:dotted; font-size:14px ">Reply to this message</td>
</tr>
<tr>
<td>Title</td><td><input name="title" type="text"></td>
</tr>
<tr>
<td>Message</td><td><textarea name="info2" cols="40" rows="5"></textarea></td>
</tr>
<tr>
<td></td><td><input name="submit" type="submit" value="Reply" /></td>
</tr>
</table>

<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		
	$query2="select * from message where messageid='{$_GET['id']}'";
	$result2=mysqli_query($con,$query2);
	$row=mysqli_fetch_assoc($result2);
		
		$query3="select * from message";
		$result3=mysqli_query($con,$query3);
		$num3=mysqli_num_rows($result3);
		$messageid=$num3+1;
		
			$query="insert into message values('{$messageid}','{$row['receiver']}','{$row['sender']}','{$_POST['title']}','{$_POST['info2']}','".time()."','no')";
			$result=mysqli_query($con,$query);
			echo"<table align='center'><td>Message has been successfully sent</td></table>";
		

	}
}

?>

<?php
include_once("footer2.php");

?>