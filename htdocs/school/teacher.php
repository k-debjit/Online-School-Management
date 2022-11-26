<?php
ob_start();
session_start();
include_once("t_header.php");
$con=mysqli_connect('localhost','root','','school');
$query="select * from teacherlist where id='{$_SESSION['id']}'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<table><tr><td>Welcome '{$row['name']}'</td></tr></table>";
echo"<table><tr><td><img src='{$row['photo']}'alt='image' width='100px'></td></tr></table>";
echo"<br><br><br><br>";
?>

<table>
                    <h1 style="border-bottom:dotted">Update Attendance</h1>
                    <tr>
                    <td><table>

                    <td>CLASS</td><td><select name="cl" size="">
                    <?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherroutine where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{	
	if($row['class']=='One')
	echo "<option>One</option>";

		if($row['class']=='Two')
	echo "<option>Two</option>";
	
		if($row['class']=='Three')
	echo "<option>Three</option>";
		
		if($row['class']=='Four')
	echo "<option>Four</option>";
		
		if($row['class']=='Five')
	echo "<option>Five</option>";
		
		if($row['class']=='Six')
	echo "<option>Six</option>";
	
		if($row['class']=='Seven')
	echo "<option>Seven</option>";
		
		if($row['class']=='Eight')
	echo "<option>Eight</option>";
	
		if($row['class']=='Nine')
	echo "<option>Nine</option>";
	
		if($row['class']=='Ten')
	echo "<option>Ten</option>";	
	}
	}

?>
                    </select></table></td>

<td><table>
                    <td>SECTION</td><td>
                    <select name="sec">
<?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherroutine where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
	if($row['section']=='A')
	echo "<option>A</option>";
	
	if($row['section']=='B')
	echo "<option>B</option>";
	
		if($row['section']=='C')
	echo "<option>C</option>";
	
		if($row['section']=='D')
	echo "<option>D</option>";
	}
		
	}

?>                    
</select></td></table>
</td>
<td>
<table>
<td></td><td></td><td><input name="update" type="submit" value="GO" /></td>
</table>
</td>
</table>
<?php

if(isset($_POST['update']))
{
	
	$_SESSION['cl']=$_POST['cl'];
	$_SESSION['sec']=$_POST['sec'];
	
	header("location:rollcall.php");
}
?>
<br/>
<table>


                    <h1 style="border-bottom:dotted">Update Report Card</h1>
                    <tr>
                    <td><table>

                    <td>CLASS</td><td><select name="class" size="">
                    <?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherroutine where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{	
	if($row['class']=='One')
	echo "<option>One</option>";

		if($row['class']=='Two')
	echo "<option>Two</option>";
	
		if($row['class']=='Three')
	echo "<option>Three</option>";
		
		if($row['class']=='Four')
	echo "<option>Four</option>";
		
		if($row['class']=='Five')
	echo "<option>Five</option>";
		
		if($row['class']=='Six')
	echo "<option>Six</option>";
	
		if($row['class']=='Seven')
	echo "<option>Seven</option>";
		
		if($row['class']=='Eight')
	echo "<option>Eight</option>";
	
		if($row['class']=='Nine')
	echo "<option>Nine</option>";
	
		if($row['class']=='Ten')
	echo "<option>Ten</option>";	
	}
	}

?>
                    </select></table></td>

<td><table>
                    <td>SECTION</td><td>
                    <select name="section">
<?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="select * from teacherroutine where id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
	if($row['section']=='A')
	echo "<option>A</option>";
	
	if($row['section']=='B')
	echo "<option>B</option>";
	
		if($row['section']=='C')
	echo "<option>C</option>";
	
		if($row['section']=='D')
	echo "<option>D</option>";
	}
		
	}

?>                    
</select></td></table>
</td>
<td>
<table>
<td><input name="submit" type="submit" value="GO" /></td>
</table>
</td>
</table>



<?php

if(isset($_POST['submit']))
{
	
	$_SESSION['cls']=$_POST['class'];
	$_SESSION['secn']=$_POST['section'];
	
	header("location:grade.php");
}
?>
<br/>

<table>
                    <h1 style="border-bottom:dotted">Check Attendance</h1>
                    <tr>
                    <td>ROLL</td><td>
                    <select name="roll1">
<?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="SELECT
    studentlist.roll
FROM
    studentlist
    INNER JOIN teacherroutine ON studentlist.class = teacherroutine.class and studentlist.section = teacherroutine.section where teacherroutine.id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
		echo"<option>{$row['roll']}</option>";
	}
		
	}

?>                    
</select></td>


<td><input name="check1" type="submit" value="GO" /></td>

</tr>

</table>

<?php
if(isset($_POST['check1']))
{
	header("location:print_attendance.php?roll={$_POST['roll1']}");
}
?>
<br/>

<table>
                    <h1 style="border-bottom:dotted">Check Report Card</h1>
                    <tr>
                    <td>ROLL</td><td>
                    <select name="roll2">
<?php
                    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

 	$query="SELECT
    studentlist.roll
FROM
    studentlist
    INNER JOIN teacherroutine ON studentlist.class = teacherroutine.class and studentlist.section = teacherroutine.section where teacherroutine.id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	
    while($row=mysqli_fetch_assoc($result))
	{
		echo"<option>{$row['roll']}</option>";
	}
		
	}

?>                    
</select></td>


<td><input name="check2" type="submit" value="GO" /></td>

</tr>

</table>

<?php
if(isset($_POST['check2']))
{
	header("location:print_grade.php?roll={$_POST['roll2']}");
}
?>


<?php
ob_end_flush();
include_once("footer2.php");
?>