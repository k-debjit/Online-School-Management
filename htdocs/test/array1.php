<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$x=array(1,2,"a",3,7,9,3,0,3);
var_dump($x);
echo "<br/>";
foreach($x as $key=>$value)
echo $key.PHP_EOL."is:".PHP_EOL.$value;
for($i=0;$i<count($x);$i++)
{
	if($x[$i]=="3")
	$x[$i]="c";
}
echo "<br/>";
var_dump($x).PHP_EOL;
?>
</body>
</html>