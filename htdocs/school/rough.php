<?php
/*include_once("a_header.php");
session_start();
?>

<table>
<tr>
<td style="font-size:16px"><b style="border-bottom:dotted">Subjects</b></td>
</tr>

<tr>
<table align="center">
<?php
		$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
		$query="SELECT
    *
FROM
    subject
    INNER JOIN teacherroutine ON subject.class = teacherroutine.class and teacherroutine.id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	if($row['sub1']!='')
	echo "<td><input name='sub1' type='checkbox'/>{$row['sub1']}</td>";
	if($row['sub2']!='')
	echo "<td><input name='sub2' type='checkbox'/>{$row['sub2']}</td>";
	if($row['sub3']!='')
	echo "<td><input name='sub3' type='checkbox'/>{$row['sub3']}</td>";
	if($row['sub4']!='')
	echo "<td><input name='sub4' type='checkbox'/>{$row['sub4']}</td>";
	if($row['sub5']!='')
	echo "<td><input name='sub5' type='checkbox'/>{$row['sub5']}</td>";
	if($row['sub6']!='')
	echo "<td><input name='sub6' type='checkbox'/>{$row['sub6']}</td>";
	if($row['sub7']!='')
	echo "<td><input name='sub7' type='checkbox'/>{$row['sub7']}</td>";
	if($row['sub8']!='')
	echo "<td><input name='sub8' type='checkbox'/>{$row['sub8']}</td>";
	if($row['sub9']!='')
	echo "<td><input name='sub9' type='checkbox'/>{$row['sub9']}</td>";
	if($row['sub10']!='')
	echo "<td><input name='sub10' type='checkbox'/>{$row['sub10']}</td>";
	if($row['sub11']!='')
	echo "<input name='sub11' type='checkbox'/>{$row['sub11']}</td>";
	if($row['sub12']!='')
	echo "<input name='sub12' type='checkbox'/>{$row['sub12']}</td>";
	}
?>
</table>
</tr>
<tr>
<table align="right">
<td><input name="submit" type="submit" value="submit"/></td>
</table>
</tr>
</table>



<?php
if(isset($_POST['submit']))
{
	if(mysqli_connect_error()=='')
	{
		$con=mysqli_connect('localhost','root','','school');
		$que="DELETE FROM teachersub WHERE id='{$_SESSION['id']}'";
        $res=mysqli_query($con,$que);

		$query="SELECT
    *
FROM
    subject
    INNER JOIN teacherroutine ON subject.class = teacherroutine.class and teacherroutine.id='{$_SESSION['id']}'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_assoc($result);
	
	
	$query33="select * from teacherlist where id='{$_SESSION['id']}'";
	$result33=mysqli_query($con,$query33);
	$row33=mysqli_fetch_assoc($result33);	
	
	if(isset($_POST['sub1']))
	{
	$query1="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub1']}')";
	$result1=mysqli_query($con,$query1);
	}
		if(isset($_POST['sub2']))
	{
	$query2="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub2']}')";
	$result2=mysqli_query($con,$query2);
	}
		if(isset($_POST['sub3']))
	{
	$query3="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub3']}')";
	$result3=mysqli_query($con,$query3);
	}
		if(isset($_POST['sub4']))
	{
	$query4="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub4']}')";
	$result4=mysqli_query($con,$query4);
	}
		if(isset($_POST['sub5']))
	{
	$query5="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub5']}')";
	$result5=mysqli_query($con,$query5);
	}
		if(isset($_POST['sub6']))
	{
	$query6="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub6']}')";
	$result6=mysqli_query($con,$query6);
	}
		if(isset($_POST['sub7']))
	{
	$query7="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub7']}')";
	$result7=mysqli_query($con,$query7);
	}
		if(isset($_POST['sub8']))
	{
	$query8="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub8']}')";
	$result8=mysqli_query($con,$query8);
	}
		if(isset($_POST['sub9']))
	{
	$query9="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub9']}')";
	$result9=mysqli_query($con,$query9);
	}
		if(isset($_POST['sub10']))
	{
	$query10="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub10']}')";
	$result10=mysqli_query($con,$query10);
	}
		if(isset($_POST['sub11']))
	{
	$query11="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub11']}')";
	$result11=mysqli_query($con,$query11);
	}
		if(isset($_POST['sub12']))
	{
	$query12="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$row['sub12']}')";
	$result12=mysqli_query($con,$query12);
	}
			echo"<table align='center'><td>Subjects have been successfully updated</td></table>";

	}
}*/
$j=1;
echo "<td><input name='sub'.$j type='checkbox' value='english'/>english</td>";
echo"<input name='submit' type='submit' value='submit'>";
if(isset($_POST['submit']))
{
$i=1;
echo "{$_POST['sub'.$i]}";
}
?>

<?php
include_once("footer2.php");
?>