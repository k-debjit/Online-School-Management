<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include_once("header.php");
include_once("code.php");
?>

<table>
<tr>
<td>USER-ID</td><td><input name="userid" type="text" /></td>
</tr>
<tr>
<td>PASSWORD</td><td><input name="password" type="password" /></td>
</tr>

<tr>
<td>
<input name="Submit" type="submit" value="Login" />
</td>
</tr>
</table>
<?php

if(isset($_POST['Submit']))
{
	check($_POST);
	
}
?>


<?php
include_once("footer.php");

?>