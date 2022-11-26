<?php
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Breakeven 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130509

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Great School</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

	
</head>
<body>
<form id="" action="" method="post" enctype="multipart/form-data">
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><font style="font-family:'Comic Sans MS', cursive">GREAT SCHOOL</font></a></h1>
			</div>
			<div id="menu">
				<ul>
					<li class="current_page_item"><a href="home.php"><font style="font-family:'Comic Sans MS', cursive">Homepage</font></a></li>
					<li><a href="control.php"><font style="font-family:'Comic Sans MS', cursive">Main menu</font></a></li>
					<li><a href="a_logout.php"><font style="font-family:'Comic Sans MS', cursive">Log out</font></a></li>
				</ul>
			</div>
		</div>
        
	</div>

<table>
<table>
<tr>
<td>Class</td><td><select name="class">
<option selected>One
<option>Two
<option>Three
<option>Four
<option>Five
<option>Six
<option>Seven
<option>Eight
<option>Nine
<option>Ten
</select></td>
</tr>
<tr><td>section</td><td><select name="section">
<option selected>A
<option>B
<option>C
<option>D
</select>
</tr>
</table>

<table border="1" cellpadding="0" cellspacing="0">

<tr>
<th>Day</th><th>Sub1</th><th>Sub2</th><th>Sub3</th><th>Sub4</th><th>Break</th><th>Sub5</th><th>Sub6</th>
<th>Sub7</th><th>Sub8</th>
</tr>
<tr>
<td>Mon</td>
<td><input name="sub1" type="text"/></td><td><input name="sub2" type="text"/></td><td><input name="sub3" type="text"/></td>
<td><input name="sub4" type="text"/></td><td>Break</td><td><input name="sub5" type="text"/></td>
<td><input name="sub6" type="text"/></td><td><input name="sub7" type="text"/></td><td><input name="sub8" type="text"/></td>
</tr>
<tr>
<td>Tue</td>
<td><input name="sub9" type="text"/></td><td><input name="sub10" type="text"/></td><td><input name="sub11" type="text"/></td>
<td><input name="sub12" type="text"/></td><td>Break</td><td><input name="sub13" type="text"/></td>
<td><input name="sub14" type="text"/></td><td><input name="sub15" type="text"/></td><td><input name="sub16" type="text"/></td>
</tr>
<tr>
<td>Wed</td>
<td><input name="sub17" type="text"/></td><td><input name="sub18" type="text"/></td><td><input name="sub19" type="text"/></td>
<td><input name="sub20" type="text"/></td><td>Break</td><td><input name="sub21" type="text"/></td>
<td><input name="sub22" type="text"/></td><td><input name="sub23" type="text"/></td><td><input name="sub24" type="text"/></td>

</tr>
<tr>
<td>Thu</td>
<td><input name="sub25" type="text"/></td><td><input name="sub26" type="text"/></td><td><input name="sub27" type="text"/></td>
<td><input name="sub28" type="text"/></td><td>Break</td><td><input name="sub29" type="text"/></td>
<td><input name="sub30" type="text"/></td><td><input name="sub31" type="text"/></td><td><input name="sub32" type="text"/></td>

</tr>
<tr>
<td>Fri</td>
<td><input name="sub33" type="text"/></td><td><input name="sub34" type="text"/></td><td><input name="sub35" type="text"/></td>
<td><input name="sub36" type="text"/></td><td>Break</td><td><input name="sub37" type="text"/></td>
<td><input name="sub38" type="text"/></td><td><input name="sub39" type="text"/></td><td><input name="sub40" type="text"/></td>

</tr>
<tr>
<td>Sat</td>
<td><input name="sub41" type="text"/></td><td><input name="sub42" type="text"/></td><td><input name="sub43" type="text"/></td>
<td><input name="sub44" type="text"/></td><td>Break</td><td><input name="sub45" type="text"/></td>
<td><input name="sub46" type="text"/></td><td><input name="sub47" type="text"/></td><td><input name="sub48" type="text"/></td>

</tr>
</table>
<tr>
<td><input name="submit" type="submit" value="submit" /></td>
</tr>
</table>

<?php
if(isset($_POST['submit']))
{
               $con=mysqli_connect('localhost','root','','school');
               	if(mysqli_connect_error()=='')
	{
		$query1="DELETE FROM routine WHERE class='{$_POST['class']}' and section='{$_POST['section']}'";
		$result1=mysqli_query($con,$query1);
		$query2="insert into routine values 
		('{$_POST['class']}','{$_POST['section']}','mon','{$_POST['sub1']}','{$_POST['sub2']}','{$_POST['sub3']}','{$_POST['sub4']}','{$_POST['sub5']}','{$_POST['sub6']}','{$_POST['sub7']}','{$_POST['sub8']}'),
		
        ('{$_POST['class']}','{$_POST['section']}','tue','{$_POST['sub9']}','{$_POST['sub10']}', '{$_POST['sub11']}','{$_POST['sub12']}','{$_POST['sub13']}','{$_POST['sub14']}','{$_POST['sub15']}','{$_POST['sub16']}'),
        ('{$_POST['class']}','{$_POST['section']}','wed','{$_POST['sub17']}','{$_POST['sub18']}','{$_POST['sub19']}','{$_POST['sub20']}', '{$_POST['sub21']}','{$_POST['sub22']}','{$_POST['sub23']}','{$_POST['sub24']}'),
		
        ('{$_POST['class']}','{$_POST['section']}','thu','{$_POST['sub25']}','{$_POST['sub26']}','{$_POST['sub27']}','{$_POST['sub28']}', '{$_POST['sub29']}','{$_POST['sub30']}','{$_POST['sub31']}','{$_POST['sub32']}'),
		
		('{$_POST['class']}','{$_POST['section']}','fri','{$_POST['sub33']}','{$_POST['sub34']}','{$_POST['sub35']}','{$_POST['sub36']}', '{$_POST['sub37']}','{$_POST['sub38']}','{$_POST['sub39']}','{$_POST['sub40']}'),
		
        ('{$_POST['class']}','{$_POST['section']}','sat','{$_POST['sub41']}','{$_POST['sub42']}','{$_POST['sub43']}','{$_POST['sub44']}', '{$_POST['sub45']}','{$_POST['sub46']}','{$_POST['sub47']}','{$_POST['sub48']}')";
		$result2=mysqli_query($con,$query2);

	}
			echo"<table align='center'><td>routine has been successfully updated</td></table>";

}
?>

<?php
include_once("footer3.php");
ob_end_flush();
?>