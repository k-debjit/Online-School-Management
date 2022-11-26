<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$arr=array("<b>"=>"<i>","</b>"=>"</i>");
$str="<b> Hello This is String class</b>";
echo $str."<br/>";
echo strtr($str,$arr)."<br/>";

$str1="Hello This is String class";
echo strpos($str1,"s",0);
echo strpos($str1,"s",10);

echo "<br/>";
echo substr_replace($str1,"bob",0);
echo "<br/>";
echo substr_replace($str1,"bob",0,0);
echo "<br/>";
echo substr_replace($str1,"bob",0,1);
echo "<br/>";
echo substr_replace($str1,"bob",0,strpos($str1,"T",0));
echo "<br/>";
echo substr_replace($str1,"bob",strpos($str1,"h",0),1);
?>

</body>
</html>