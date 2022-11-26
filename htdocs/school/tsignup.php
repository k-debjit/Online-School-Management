<?php
include_once("header2.php")
?>

<table align="center">
<tr>
<td>Teacher-ID</td><td><input name="id" type="text"></td>
</tr>
<tr>
<td>Username</td><td><input name="username" type="text"></td>
</tr>
<tr>
<td>Password</td><td><input name="pass1" type="password"></td>
</tr>
<tr>
<td>Re-type Password</td><td><input name="pass2" type="password"></td>
</tr>
<tr>
<td>Upload photo</td><td><input name="photo" type="file"></td>
</tr>
<tr>
<td><input name="submit" type="submit" value="submit"></td>
</tr>
</table>


<?php
if(isset($_POST['submit']))
{
			$path="pics/".$_FILES['photo']['name'];
$up=move_uploaded_file($_FILES['photo']['tmp_name'],"pics/".$_FILES['photo']['name']);

	$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
			if($_POST['pass1']==$_POST['pass2'])
	{
		$query1="select * from teacherlist where id='{$_POST['id']}'";
		$result1=mysqli_query($con,$query1);
		$row1=mysqli_num_rows($result1);
		$query2="select * from tusers where username='{$_POST['username']}' or id='{$_POST['id']}'";
		$result2=mysqli_query($con,$query2);
		$row2=mysqli_num_rows($result2);
		$query3="select * from susers where username='{$_POST['username']}'";
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_num_rows($result3);
		if($row1!=0 && $row2==0 && $row3==0)
		{
					$query="insert into tusers values ('{$_POST['id']}','{$_POST['username']}','{$_POST['pass1']}','{$path}','".time()."')";
							$result=mysqli_query($con,$query);
							echo "<table align='center'><td>you have signed up successfully</td></table>";
		}
		elseif($row1==0)
		echo "<table align='center'><td>This ID does not exist,please provide valid one</td></table>";
		elseif($row2!=0 || $row3!=0)
		echo "<table align='center'><td>This Username or ID has already been used,please choose another<td></table>";
	}
		else
	echo "<table align='center'><td>password didn't match<td></table>";

	}

}
?>

<?php
include_once("footer2.php");
?>