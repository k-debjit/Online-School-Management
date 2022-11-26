<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload"  />
<input type="submit" name="Submit" value="Upload" />

<?php
if(isset($_COOKIE['user']))
{
	echo $_COOKIE['user'];
}
   if(isset($_POST["Submit"]))
   { 
     
	  //var_dump($_FILES);
	 move_uploaded_file($_FILES["upload"]["tmp_name"],"images/".$_FILES['upload']['name']);
   }
?>
<select name="filename">
<?php
 if($dir= opendir("./images/"))
 {
	while(false!= ($file=readdir($dir)))
	{
	   echo "<option > $file  </option>";
	}
 }
 closedir($dir);
?>
</select>

<input name="Download" type="submit" value="download" />
<?php

 if(isset($_POST["Download"]))
   {
	   echo $_POST['filename'];
	  header("location:download.php?filename={$_POST['filename']}");
   
   }
?>
</form>
</body>
</html>