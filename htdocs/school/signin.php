<?php
session_start();
include_once("header2.php");
?>
<table align="center">
<tr>
<td>Username</td><td><input name="username" type="text"<td></td>
</tr>
<tr>
<td>Password</td><td><input name="pass" type="password"></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="submit"></td>
</tr>
</table>

<?php
if(isset($_POST['submit']))
{
		$con=mysqli_connect('localhost','root','','school');
				if(mysqli_connect_error()=='')
	{
		$query1="select * from susers where username='{$_POST['username']}' and password='{$_POST['pass']}'";
		$result1=mysqli_query($con,$query1);
		$num1=mysqli_num_rows($result1);
		$query2="select * from tusers where username='{$_POST['username']}' and password='{$_POST['pass']}'";
		$result2=mysqli_query($con,$query2);
		$num2=mysqli_num_rows($result2);
		if($num1==0 && $num2==0)
		echo "<table align='center'><td>Please provide valid Username and Password</td></table>";
		else
		{
			$_SESSION['username']=$_POST['username'];
			header("location:mail_home.php");
		}
	}


}
?>

<?php
include_once("footer2.php");
?>