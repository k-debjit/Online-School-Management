<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x=0;
while($x<31)
{
	$i=0;
	$i=$x%2;
	if($i!=0)
	echo $x.PHP_EOL;
	$x++;
}
?>
</body>
</html>