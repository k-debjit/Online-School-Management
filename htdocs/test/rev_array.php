<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x=array(1,2,3,4,5,6);
for($i=0;$i>count($x)/2;$i++)
{
	$temp=$x[i];
	$x[i]=$x[count($x)-$i-1];
	$x[count($x)-$i-1]=$temp;
	
}
print_r($x);
echo "<br/>";
?>
</body>
</html>