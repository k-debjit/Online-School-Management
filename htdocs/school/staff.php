<?php
include_once("header2.php");
?>
<html>
<head>
<style>
div.img
  {
  margin:5px;
  padding: 5px;
  border:1px solid #0000ff;
  height:auto;
  width:auto;
  float:left;
  text-align:center;
  }
div.img img
  {
  display:inline;
  margin:5px;
  border:1px solid #ffffff;
  }
div.img a:hover img
  {
  border:1px solid #0000ff;
  }
div.desc
  {
  text-align:center;
  font-weight:normal;
  width:120px;
  margin:5px;
  }
</style>
</head>
<body>
<table>
<tr>
<?php
$con=mysqli_connect('localhost','root','','school');
if(mysqli_connect_error()=='')
{
$query="select * from teacherlist";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	if($row['post']=='principal')
	{
	echo"<td style='border-bottom:dotted'> 
<div class='img'>
  <img src='{$row['photo']}' alt='photo' width='120' height='90'>
  <div class='desc'>{$row['name']}</div><div class='desc'>{$row['post']}</div>
</div></td>";
	}
}
}
?>

<?php
$con=mysqli_connect('localhost','root','','school');
if(mysqli_connect_error()=='')
{
$query="select * from teacherlist";
$result=mysqli_query($con,$query);
echo "<tr><td>";
while($row=mysqli_fetch_assoc($result))
{
	if($row['post']!='principal')
	{
	echo"
<div class='img'>
  <img src='{$row['photo']}' alt='photo' width='120' height='90'>
  <div class='desc'>{$row['name']}</div><div class='desc'>{$row['post']}</div>
</div>";
	}
}
echo"</td></tr>";
}
?>
</table>
</body>
</html>


<?php
include_once("footer2.php");
?>