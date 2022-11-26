<?php
session_start();
include_once("header3.php");
include_once("code.php");
?>


<table align="center">
<tr>
<td style="font-size:16px"><b style="border-bottom:dotted">Class</b></td>
</tr>

<tr>
<td><input name="one[]" type="checkbox" onclick="showMe('div1', this)" value="YES" /> 
One</td><td>
<div class="divstyle" id="div1">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="1a" type="checkbox" value="YES" />A</td>
<td><input name="1b" type="checkbox" value="YES" />B</td>
<td><input name="1c" type="checkbox" value="YES" />C</td>
<td><input name="1d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="two[]" type="checkbox" onclick="showMe('div2', this)" value="YES" />
Two</td><td>
<div class="divstyle" id="div2">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="2a" type="checkbox" value="YES" />A</td>
<td><input name="2b" type="checkbox" value="YES" />B</td>
<td><input name="2c" type="checkbox" value="YES" />C</td>
<td><input name="2d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="three[]" type="checkbox" onclick="showMe('div3', this)" value="YES" />
Three</td><td>
<div class="divstyle" id="div3">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="3a" type="checkbox" value="YES" />A</td>
<td><input name="3b" type="checkbox" value="YES" />B</td>
<td><input name="3c" type="checkbox" value="YES" />C</td>
<td><input name="3d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="four[]" type="checkbox" onclick="showMe('div4', this)" value="YES" />
Four</td><td>
<div class="divstyle" id="div4">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="4a" type="checkbox" value="YES" />A</td>
<td><input name="4b" type="checkbox" value="YES" />B</td>
<td><input name="4c" type="checkbox" value="YES" />C</td>
<td><input name="4d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="five[]" type="checkbox" onclick="showMe('div5', this)" value="YES" /> 
Five
</td><td>
<div class="divstyle" id="div5">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="5a" type="checkbox" value="YES" />A</td>
<td><input name="5b" type="checkbox" value="YES" />B</td>
<td><input name="5c" type="checkbox" value="YES" />C</td>
<td><input name="5d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="six[]" type="checkbox" onclick="showMe('div6', this)" value="YES" /> 
Six</td><td>
<div class="divstyle" id="div6">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="6a" type="checkbox" value="YES" />A</td>
<td><input name="6b" type="checkbox" value="YES" />B</td>
<td><input name="6c" type="checkbox" value="YES" />C</td>
<td><input name="6d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="seven[]" type="checkbox" onclick="showMe('div7', this)" value="YES" />
Seven</td><td>
<div class="divstyle" id="div7">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="7a" type="checkbox" value="YES" />A</td>
<td><input name="7b" type="checkbox" value="YES" />B</td>
<td><input name="7c" type="checkbox" value="YES" />C</td>
<td><input name="7d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="eight[]" type="checkbox" onclick="showMe('div8', this)" value="YES" />
Eight</td><td>
<div class="divstyle" id="div8">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="8a" type="checkbox" value="YES" />A</td>
<td><input name="8b" type="checkbox" value="YES" />B</td>
<td><input name="8c" type="checkbox" value="YES" />C</td>
<td><input name="8d" type="checkbox" value="YES" />D</td>
</table>
</div>

</td>
</tr>
<tr>
<td><input name="nine[]" type="checkbox" onclick="showMe('div9', this)" value="YES" />
Nine</td><td>
<div class="divstyle" id="div9">
<table>
<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>
<td><input name="9a" type="checkbox" value="YES" />A</td>
<td><input name="9b" type="checkbox" value="YES" />B</td>
<td><input name="9c" type="checkbox" value="YES" />C</td>
<td><input name="9d" type="checkbox" value="YES" />D</td>
</table>
</div>
</td>
</tr>
<tr>
<td><input name="ten[]" type="checkbox" onclick="showMe('div10', this)" value="YES" /> 
Ten
</td><td>
<div class="divstyle" id="div10">
<table>

<td style="font-size:16px"><b style="border-bottom:dotted">Section :-</b></td>

<td><input name="10a" type="checkbox" value="YES" />A</td>
<td><input name="10b" type="checkbox" value="YES" />B</td>
<td><input name="10c" type="checkbox" value="YES" />C</td>
<td><input name="10d" type="checkbox" value="YES" />D</td>
</table>
</div>
</td>
</tr>

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
		$query3="select name from teacherlist where id='{$_SESSION['id']}'";
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_fetch_assoc($result3);

		$query1="DELETE FROM teacherroutine WHERE id='{$_SESSION['id']}'";
		$result1=mysqli_query($con,$query1);
        if(isset($_POST['one']))
		{ 	
	$class='One';
    if(isset( $_POST['1a'] ))
{
	
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);
}
	if(isset( $_POST['1b'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['1c'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['1d'] ) )
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		
		        if(isset($_POST['two']))
		{ 	
	$class='Two';
    if(isset( $_POST['2a'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['2b'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['2c'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['2d'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}



		}
		        if(isset($_POST['three']))
		{ 	
	$class='Three';
    if(isset( $_POST['3a'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['3b'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['3c'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['3d'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['four']))
		{ 	
	$class='Four';
    if(isset( $_POST['4a'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['4b'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['4c'] ))
	{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['4d'] ))
		{
		$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

		}
		}
		        if(isset($_POST['five']))
		{ 	
	$class='Five';
    if(isset( $_POST['5a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['5b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['5c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['5d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['six']))
		{ 	
	$class='Six';
    if(isset( $_POST['6a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['6b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['6c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['6d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['seven']))
		{ 	
	$class='Seven';
    if(isset( $_POST['7a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['7b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['7c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['7d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['eight']))
		{ 	
	$class='Eight';
    if(isset( $_POST['8a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['8b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['8c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['8d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['nine']))
		{ 	
	$class='Nine';
    if(isset( $_POST['9a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['9b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['9c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['9d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}
		        if(isset($_POST['ten']))
		{ 	
	$class='Ten';
    if(isset( $_POST['10a'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','A')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['10b'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','B')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['10c'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','C')";
		$result2=mysqli_query($con,$query2);

	}
	if(isset( $_POST['10d'] ))
	{
				$query2="insert into teacherroutine values('{$_SESSION['id']}','{$row3['name']}','{$class}','D')";
		$result2=mysqli_query($con,$query2);

	}

		}

		echo"<table align='center'><td>Class has been successfully updated</td></table>";

	}
	
	
	}


?>

<?php
include_once("footer2.php");
?>