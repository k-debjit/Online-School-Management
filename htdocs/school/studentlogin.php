<?php
session_start();
include_once("header2.php")
?>

                    <center><table>
                    <tr>
                    <td>ROLL NUMBER</td><td><input name="roll" type="text"/></td>
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
	if(isset($_POST["submit"]))
	{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		
			$query="select * from studentlist where roll='{$_POST['roll']}' and password='{$_POST['password']}'";
			$_SESSION['roll']=$_POST['roll'];
	$result=mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0)
	{
		

		header("location:student.php");
	}
	else
	{
		 echo "<table align='center'><td>Please enter valid userid and password</td></table>";
	}

	}
	}

?>	
                    


<?php
include_once("footer2.php");
?>