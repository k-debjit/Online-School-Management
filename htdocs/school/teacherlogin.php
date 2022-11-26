<?php
session_start();
include_once("header2.php")
?>

    <?php
	if(isset($_POST["submit"]))
	{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		
			$query="select * from teacherlist where id='{$_POST['id']}' and password='{$_POST['password']}'";
			$_SESSION['id']=$_POST['id'];
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0)
	{
		

		header("location:teacher.php");
	}
	else
	{
		 echo "<center> Please enter valid userid and password</center>";
	}

	}
	}

?>	



                    <center><table>
                    <tr>
                    <td>USER-ID</td><td><input name="id" type="text"/></td>
                    </tr>
                    <br/>
                    <br/>
                    <tr>
                    <td>PASSWORD</td><td><input name="password" type="password"/></td>
                    </tr>
                    <br/>
                    <br/>
                    <tr>
                    <td></td><td><input name="submit"
                    type="submit" value="Login"/></td>
                    </tr>
                    </table>
                    </center>                    


<?php
include_once("footer2.php");
?>