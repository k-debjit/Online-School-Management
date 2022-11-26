<?php
session_start();
include_once("header4.php");
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
	echo "<table><tr><td>Welcome '{$_SESSION['username']}'</td></tr></table>";
echo"<table><tr><td><img src='{$row['photo']}'alt='image' width='100px'></td></tr></table>";
echo"<br><br><br><br>";
}

?>


<table align="center">
                    <tr> 
                    <td><a href="mail_profile.php"><h1 style="border-bottom:dotted">Update Profile</a></h1></td>
                   </tr>
                    <tr> 
                    <td><a href="send_message.php"><h1 style="border-bottom:dotted">Send Message</a></h1></td>
                   </tr>
                    <tr> 
                    <td><a href="inbox_message.php"><h1 style="border-bottom:dotted">Inbox Message(
                    <?php
						$con=mysqli_connect('localhost','root','','school');
						if(mysqli_connect_error()=='')
						{
							$query="SELECT * FROM message WHERE receiver='{$_SESSION['username']}' AND seen = 'no' ";
							$result=mysqli_query($con,$query);
							$num=mysqli_num_rows($result);
							if ($num==0)
							echo "0 unread";
							else
							echo "{$num} unread";
						}
					?>
                    )
                    </a></h1></td>
                   </tr>
                    <td><a href="sent_message.php"><h1 style="border-bottom:dotted">Sent Message(
                    <?php
						$con=mysqli_connect('localhost','root','','school');
						if(mysqli_connect_error()=='')
						{
							$query="SELECT * FROM message WHERE sender='{$_SESSION['username']}' ";
							$result=mysqli_query($con,$query);
							$num=mysqli_num_rows($result);
							if ($num==0)
							echo "0 sent";
							else
							echo "{$num} sent";
						}
					?>
                    )
                    </a></h1></td>
                   </tr>

</table>
<?php
include_once("footer2.php");
?>