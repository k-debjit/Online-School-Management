<?php
session_start();
include_once("header4.php");
	echo "<table><tr><td>Welcome '{$_SESSION['username']}'</td></tr></table>";
echo"<br><br><br><br>";

?>
<table align="center" style="font-size:18px">
<tr>
<td style="border-bottom:dotted">New Message</td>
</tr>
<?php
						$i=1;
						$con=mysqli_connect('localhost','root','','school');
						if(mysqli_connect_error()=='')
						{
							$query="SELECT * FROM message WHERE receiver='{$_SESSION['username']}' AND seen = 'no' ";
							$result=mysqli_query($con,$query);
							if(mysqli_num_rows($result)==0)
							echo "<tr><td>No new message</td></tr>";
							else
							{
							while($row=mysqli_fetch_assoc($result))
							{
								echo"<tr><td>
								<a href='rmessage.php?id={$row['messageid']}'>
								".$i.".Sender:  {$row['sender']}&nbsp;&nbsp;&nbsp;Title:  {$row['title']}
								&nbsp;&nbsp;&nbsp;Time: ".date('m/d/Y H:i:s' ,$row['timestamp'])."
								</a></td></tr>";
								$i++;
							}
						}
						}

?>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td style="border-bottom:dotted">Old Message</td>
</tr>
<?php
						$i=1;
						$con=mysqli_connect('localhost','root','','school');
						if(mysqli_connect_error()=='')
						{
							$query="SELECT * FROM message WHERE receiver='{$_SESSION['username']}' AND seen = 'yes' ";
							$result=mysqli_query($con,$query);
							if(mysqli_num_rows($result)==0)
							echo "<tr><td>No old message</td></tr>";
							else
							{
							while($row=mysqli_fetch_assoc($result))
							{
								echo"<tr><td>
								<a href='rmessage.php?id={$row['messageid']}'>
								".$i.".Sender:  {$row['sender']}&nbsp;&nbsp;&nbsp;Title:  {$row['title']}
								&nbsp;&nbsp;&nbsp;Time: ".date('m/d/Y H:i:s' ,$row['timestamp'])."
								</a></td></tr>";
								$i++;
							}
						}
						}

?>

</table>
<?php
include_once("footer2.php");
?>