<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$num=30;

for($i=1;$i<=$num;$i++)
{
$temp=1;
for($j=2;$j<=$i/2;$j++)
{
	$temp=$i%$j;
	if($temp==0)
	break;
}
if($temp!=0)
{
echo $i."is prime";
echo "<br/>";
}
}
?>
</body>
</html>