<?php
function data()
{
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
    $query="select * from teacherlist where id = '{$_POST['id']}'";
	$result=mysqli_query($con,$query);

	$row=mysqli_fetch_assoc($result);
	}
	if($row==true)
	{
	
	header("location:update_teacher.php");	
	
	}
	else
	echo "<h3 align='center'>Please enter a valid ID</h3>";

}
?>

<?php
function update($id)
{
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
    $query="select * from teacherlist where id ='{$id}'";
	$result=mysqli_query($con,$query);

	$row=mysqli_fetch_assoc($result);
	}
	
	return $row;	
	

}
?>

<?php
function stdata()
{
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
    $query="select * from studentlist where roll = '{$_POST['roll']}'";
	$result=mysqli_query($con,$query);

	$row=mysqli_fetch_assoc($result);
	}
	if($row==true)
	{
	
	header("location:update_student.php");	
	
	}
	else
	echo "<h3 align='center'>Please enter a valid Roll</h3>";

}
?>

<?php
function stupdate($roll)
{
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
    $query="select * from studentlist where roll ='{$roll}'";
	$result=mysqli_query($con,$query);

	$row=mysqli_fetch_assoc($result);
	}
	
	return $row;	
	

}
?>
<?php
function asection($row)
{
		$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		
		for($i=0;$row[$i]!='';$i++)
		{
			$query[$i]="SELECT roll from studentlist WHERE class={$row[$i]} and section='a'";
			$result[$i]=mysqli_query($con,$query[$i]);
			$r[$i]=mysqli_fetch_assoc($result[$i]);
			
		}
		var_dump ($r);
	}
}
?>

<?php
function grade($cl,$sec)
{
		$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="SELECT * FROM studentlist WHERE class='{$cl}' AND section='{$sec}'";
		$result=mysqli_query($con,$query);
	}
	return $result;

}
?>

<?php
function heading($id)
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="select * from notice where id='{$id}'";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
}
?>

<?php
function name($id)
{
	$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="select * from notice where id='{$id}'";
		$result=mysqli_query($con,$query);
		$row=mysqli_fetch_assoc($result);
		$name=pathinfo($row['note']);
		return $name['basename'];
	}
}
?>



<?php
/* using database
function duplicate()
{
	
	    $row=data();
		
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
	    
		$query1="insert into temp values('{$row['id']}','{$row['name']}','{$row['qualification']}','{$row['gender']}','{$row['age']}','{$row['dateofbirth']}','{$row['religion']}','{$row['contactno']}','{$row['address']}','{$row['photo']}')";
	
	$result1=mysqli_query($con,$query1);
	}
}
function up()
{
		    $row=data();
		$id=$row['id'];
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

			
    $query2="select * from temp where '{$id}' = '{$row['id']}'";

$result2=mysqli_query($con,$query2);
	$row1=mysqli_fetch_assoc($result2);
	}
	if($row1==true)
	{
		
	return $row1;
	}
	
}
?>
<?php

function delete($old)
{
	
	$row=update();
	
		    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{

			
    $query2="DELETE FROM temp WHERE '{$old}' = '{$row['id']}'";

$result2=mysqli_query($con,$query2);

		    
	}
}

	?>
    
    
    <?php
function del()
{
	$row=data();
	$id=go($y);
	echo $id;
$con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
    $query="DELETE FROM teacherlist WHERE id = '{$_session['id']}'";
	$result=mysqli_query($con,$query);
	}
}

?>

    
    
<?php
function insert()
{
	$row=data();
	
	    $con=mysqli_connect('localhost','root','','school');
		if(mysqli_connect_error()=='')
	{
	    
		$query="insert into teacherlist values('{$id}','{$name}','{$qualification}','{$gender}','{$age}','{$dateofbirth}','{$religion}','{$contactno}','{$address}','{$path}')";
	
	$result=mysqli_query($con,$query);
}
}
?>
<?php
function go($y)
{
	$GLOBALS[$id]=$GLOBALS[$y];
	
	return $id;
}
?>
*/
