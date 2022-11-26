<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
  $str="Jan,Feb,Mar Apr";
 $arr= explode(",",$str);
 var_dump($arr);
 echo "<br/>".implode("|",$arr);
 echo "<br/>";
 $str2="This is string class 2";
 echo strstr($str2,"class");
  echo "<br/>";
 echo strstr($str2,"class",true);
 echo "<br/>";
 echo substr($str2,3);
 echo "<br/>";
 echo substr($str2,3,5);
 
?>
</body>
</html>