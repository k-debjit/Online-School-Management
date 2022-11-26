<?php
include_once("header2.php")
?>

<script>
$(document).ready(function(){
	$("#form1").validate({
		rules :{
			roll:{
				required : true,
			},
			username :{
				required : true,
				minlength : 4
			},
						pass1 :{
				required : true,
				minlength : 5
			}
		},
		messages:{
			roll:{
				required:"roll is required",
			},
			username:{
				required:"please provide a username",
				minlength:"username must be atleast 4 characters"
			},
						pass1:{
				required:"please provide a password",
				minlength:"password must be atleast 5 in length"
			}
		}
	});
});
</script>


<table align="center">
<tr>
<td>Roll Number</td><td><input name="roll" type="text"></td>
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
		$query1="select * from studentlist where roll='{$_POST['roll']}'";
		$result1=mysqli_query($con,$query1);
		$row1=mysqli_num_rows($result1);
		$query2="select * from susers where username='{$_POST['username']}' or roll='{$_POST['roll']}'";
		$result2=mysqli_query($con,$query2);
		$row2=mysqli_num_rows($result2);
		$query3="select * from tusers where username='{$_POST['username']}'";
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_num_rows($result3);
		if($row1!=0 && $row2==0 && $row3==0)
		{
					$query="insert into susers values ('{$_POST['roll']}','{$_POST['username']}','{$_POST['pass1']}','{$path}','".time()."')";
							$result=mysqli_query($con,$query);
							echo "<table><td>you have signed up successfully</td></table>";
		}
		elseif($row1==0)
		echo "<table><td>This Roll Number does not exist,please provide valid one</td></table>";
		elseif($row2!=0 || $row3!=0)
		echo "<table><td>This Username or Roll Number has already been used,please choose another</td></table>";
	}
		else
	echo "<table><td>password didn't match</td></table>";

	}

}
?>

<?php
include_once("footer2.php");
?>