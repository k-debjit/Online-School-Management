<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$data='world';

echo "Hello $data"."<br/>";
echo $data[2]."<br/>";
echo "string length"."<br/>";

echo strlen($data)."<br/>";
echo "String to upper"."<br/>";
 echo strtoupper($data)."<br/>";
 echo "<u>String lower</u>"."<br/>";
 echo strtolower($data)."<br/>";;
 $result="this is string function";
 echo "<u>First Letter in capital</u>"."<br/>";
 echo ucfirst($result)."<br/>";
 echo "<u>First letter of word  in capital</u>"."<br/>";
 echo ucwords($result)."<br/>";
?>
</body>
</html>