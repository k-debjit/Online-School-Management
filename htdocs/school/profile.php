<?php
session_start();
include_once("header4.php");
?>
<?php
$con=mysqli_connect('localhost','root','','school');
if(mysqli_connect_error()=='')
{
	$query1="select * from susers where username='{$_SESSION['username']}'";
	$result1=mysqli_query($con,$query1);
	$num1=mysqli_num_rows($result1);
	$query2="select * from tusers where username='{$_SESSION['username']}'";
	$result2=mysqli_query($con,$query2);
	$num2=mysqli_num_rows($result2);
	if($num1!=0)
	$row=mysqli_fetch_assoc($result1);
	else
	$row=mysqli_fetch_assoc($result2);

}


echo"
<table align='center'>
<tr>
<td>Username</td><td><input name='username' type='text' value='{$row['username']}'></td>
</tr>
<tr>
<td>Password</td><td><input name='pass1' type='text' value={$row['password']}></td>
</tr>
<tr>
<td>Re-type Password</td><td><input name='pass2' type='text' value='{$row['password']}'></td>
</tr>
<tr>
<td>Photo</td><td><img src='{$row['photo']}'alt='image' width='200px'></td>
</tr>
<tr>
<td></td><td>Change photo</td>
</tr>
<tr>
<td></td><td><input name='photo' type='file'></td>
</tr>
<tr>
<td></td><td><input name='submit' type='submit' value='submit'></td>
</tr>
</table>";
?>
<?php
if(isset($_POST['submit']))
{
			$path="pics/".$_FILES['photo']['name'];
$up=move_uploaded_file($_FILES['photo']['tmp_name'],"pics/".$_FILES['photo']['name']);

	$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
	$query4="select * from susers where username='{$_SESSION['username']}'";
	$result4=mysqli_query($con,$query4);
	$num4=mysqli_num_rows($result4);
	$query5="select * from tusers where username='{$_SESSION['username']}'";
	$result5=mysqli_query($con,$query5);
	$num5=mysqli_num_rows($result5);
	if($num4!=0)
	$db='susers';
	else
	$db='tusers';

		if($_POST['pass1']==$_POST['pass2'])
	{
		$query2="select * from susers where username='{$_POST['username']}'";
		$result2=mysqli_query($con,$query2);
		$row2=mysqli_num_rows($result2);
		$query3="select * from tusers where username='{$_POST['username']}'";
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_num_rows($result3);
		if($row2==0 && $row3==0)
		{
			
		$query="update {$db} set username='{$_POST['username']}',password='{$_POST['pass1']}',photo='{$path}' where username='{$_SESSION['username']}'";
		$result=mysqli_query($con,$query);
		echo "<table align='center'><td>you have updated successfully</td></table>";
		}
		elseif($row2!=0 || $row3!=0)
		echo "<table align='center'><td>This Username or Roll Number has already been used,please choose another</td></table>";
	}
		else
	echo "<table align='center'><td>password didn't match</td></table>";

	}

}

?>
<?php
include_once("footer2.php");
?>