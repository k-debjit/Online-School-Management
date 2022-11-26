<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form action="" method="post">
<table width="200" border="1">
  <tr>
    <td>Enter Your name</td>
    <td><input name="name" type="text" /></td>
   
  </tr>
  <tr>
    <td>Enter Your age</td>
    <td><input name="age" type="text" /></td>
    
  </tr>
  <tr>
    <td>Enter Your address</td>
    <td><textarea name="address" cols="" rows=""></textarea></td>
   
  </tr>
   <tr>
    <td>Select Your Gender</td>
    <td>male<input name="Gender" type="radio" value="male" />
    female<input name="Gender" type="radio" value="female" /></td>
   
  </tr>
  <tr>
    <td><input name="Submit" type="submit" value="submit" /></td>
    
  </tr>
</table>
<br /><br />


<?php
if(isset($_POST["Submit"]))
{ echo "<table border='2'>";
   foreach($_POST as $key=>$value)
   {
	   echo "<tr>
	          <td>Your $key is</td>
			  <td>$value</td></tr>";
   }
   echo "</table>";

}


?>



</form>
<form action="" method="post1">
enter something<textarea name="" cols="" rows=""></textarea>
<input name="Submit1" type="submit" value="enter" />
get text<textarea name="address" cols="" rows=""></textarea>
<?php
if(isset($_POST1["Submit1"]))
{ 
   foreach($_POST1 as $key=>$value)
   {
	   echo "<tr>
	          <td>Your $key is
			  $value</td></tr>";
   }
   

}

?>
</form>

</body>
</html>





















