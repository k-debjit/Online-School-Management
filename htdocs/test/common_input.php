<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data">
<?php
$arr;
$x=array();
$y=array();
$i=0;

foreach($_POST as $key => $value)
{
	$x[$i]=$key;
	$i++;
}

$con=mysqli_connect('localhost','root','','test');
if(isset($_POST['submit']))
{
		$path="place/".$_FILES['photo']['name'];
	$up=move_uploaded_file($_FILES['photo']['tmp_name'],"place/".$_FILES['photo']['name']);

	
	if(mysqli_connect_error()=='')
	{
		for($j=0;$x[$j]!= 'submit';$j++)
		{
			
			$y[$j]="'{$_POST[$x[$j]]}'";
			

		}
		
		
		$arr=implode(",",$y);
		$query="insert into input values ($arr,'{$path}')";
		$result=mysqli_query($con,$query);
	}
}
?>







<table>
 <tr>
                   <td>ID</td><td><input name="id" type="text"></td>
                   </tr>
                   <tr>
                   <td>Name</td><td><input name="name" type="text"></td>
                   </tr>
                  <tr>
                   <td>Photo</td><td><input name="photo" type="file"></td>
                   </tr> 
                   <tr>
                   </tr>
                   <tr>
                   <td><input name="submit" type="submit" value="Add"  /></td>
                   </tr>                   

</table>  



</form>
</body>
</html>
