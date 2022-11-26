<?php
include_once("a_header.php");
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
	while($row=mysqli_fetch_assoc($result))
	{
	if($row['class']=='One')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
		if($row['class']=='Two')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Three')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Four')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Five')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Six')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Seven')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Eight')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Nine')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
			if($row['class']=='Ten')
	{
		$i=1;
		echo "<tr>";
		while($row['sub'.$i]!='')
		{
	echo "<td><input name='sub[]' type='checkbox' value='{$row['sub'.$i]}'/>{$row['sub'.$i]}</td>";
		$i++;
		}
		echo "</tr>";
	}
	}
	}
?>
</table>
</tr>
<tr>
<table align="center">
<td><input name="submit" type="submit" value="submit"/></td>
</table>
</tr>
</table>



<?php
if(isset($_POST['submit']))
{
	$sub=$_POST['sub'];
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
	for($i=0; $i < count($sub); $i++)
	{
	$query1="insert into teachersub values('{$_SESSION['id']}','{$row33['name']}','{$sub[$i]}')";
	$result1=mysqli_query($con,$query1);	
	}
	echo"<table align='center'><td>Subjects have been successfully updated</td></table>";
	}
}
?>

<?php
include_once("footer2.php");
?>