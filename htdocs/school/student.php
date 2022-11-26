<?php
session_start();
include_once("s_header.php");
$con=mysqli_connect('localhost','root','','school');
$query="select * from studentlist where roll='{$_SESSION['roll']}'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<table><tr><td>Welcome '{$row['name']}'</td></tr></table>";
echo"<table><tr><td><img src='{$row['photo']}'alt='image' width='100px'></td></tr></table>";
echo"<br><br><br><br>";
?>
<table align="center">
<tr>
<td><a href=<?php echo"print_routine.php?roll={$_SESSION['roll']}" ?> ><h1 style="border-bottom:dotted">Class Routine</h1></a></td>
</tr>
<tr>
<td><a href=<?php echo"print_grade.php?roll={$_SESSION['roll']}" ?> ><h1 style="border-bottom:dotted">Report Card</h1></a></td>
</tr>
<tr>
<td><a href=<?php echo"print_attendance.php?roll={$_SESSION['roll']}" ?> ><h1 style="border-bottom:dotted">Attendance</h1></a></td>
</tr>
</table>


<?php
include_once("footer2.php");
?>