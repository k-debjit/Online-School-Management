<?php
session_start();
include_once("header4.php");
	echo "<table><tr><td>Welcome '{$_SESSION['username']}'</td></tr></table>";
echo"<br><br><br><br>";

?>

<table align="center">
<tr>
<td>Recipient</td><td><input name="receiver" type="text"></td>
</tr>
<tr>
<td>Title</td><td><input name="title" type="text"></td>
</tr>
<tr>
<td>Message</td><td><textarea name="info" cols="40" rows="5"></textarea></td>
</tr>
<tr>
<td></td><td><input name="submit" type="submit" value="Send"></td>
</tr>
</table>

<?php
if(isset($_POST['submit']))
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query1="SELECT * FROM tusers WHERE username='{$_POST['receiver']}' ";
		$result1=mysqli_query($con,$query1);
		$num1=mysqli_num_rows($result1);
		
		$query2="SELECT * FROM susers WHERE username='{$_POST['receiver']}' ";
		$result2=mysqli_query($con,$query2);
		$num2=mysqli_num_rows($result2);
		
		$query3="select * from message";
		$result3=mysqli_query($con,$query3);
		$num3=mysqli_num_rows($result3);
		$messageid=$num3+1;
		if($num1==0 && $num2==0)
		echo "This Recipient does not exist";
		else
		{
			$query="insert into message values('{$messageid}','{$_SESSION['username']}','{$_POST['receiver']}','{$_POST['title']}','{$_POST['info']}','".time()."','no')";
			$result=mysqli_query($con,$query);
			echo"<table align='center'><td>Message has been successfully sent</table></td>";
		}

	}
}
?>

<?php
include_once("footer2.php");
?>