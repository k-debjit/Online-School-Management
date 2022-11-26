<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<?php
if(isset($_COOKIE['user']))
{
	header("location:upload.php");
}
?>
<table>
<tr>
<td>USER-ID</td><td><input name="userid" type="text" /></td>
</tr>
<tr>
<td>PASSWORD</td><td><input name="password" type="password" /></td>
</tr>
<tr>
<td><input name="Remember" type="checkbox" value="" />  Remember Me</td></tr>
<tr>
<td>
<input name="Submit" type="submit" value="Login" />
</td>
</tr>
</table>
<?php
$con=mysqli_connect('localhost','root','','regdb');
if(isset($_POST['Submit']))
{
	if(mysqli_connect_error()=='')
	{
		$query="select * from login where userid='{$_POST['userid']}' and password='{$_POST['password']}'";
		$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
	if(isset($_POST['Remember']))
	{
		setcookie("user","{$_POST['userid']}",time()+60);
	}
	header("location:upload.php");
}
	}
else
{
	echo "error";
}
	
	
	
}
?>
</form>

</body>
</html>