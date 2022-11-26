<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
<table>
<tr>
<td>name</td><td><input name="name" type="text" /></td>
</tr>
<tr>
<td>id</td><td><input name="id" type="text" /></td>
</tr>
<tr>
<td>Class</td><td><input name="class" type="text" /></td>
</tr>
<tr>
<td>age</td><td><input name="age" type="text" /></td>
</tr>
<tr>
<td><input name="Submit" type="submit" value="submit"/></td>
</tr>
</table>
</form>
<?php
$x=array();
$i=0;
$con=mysqli_connect('localhost','root','','student');
if(isset($_POST['Submit']))
{
	if(mysqli_connect_error()=='')
	{
	foreach($_POST as $key=>$value)
	{
		$x[$i]=$key;
		$i++;
	}
	
	for($j=0;$x[$j]!='Submit';$j++)
	{
		$f=$x[$j];
	$query="insert into student2 values('{$_POST[$f]}')";	
	}
	$result=mysqli_query($con,$query);
	}
}
?>
</body>
</html>