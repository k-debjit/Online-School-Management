<?php
session_start();
function connect()
{
	$con=mysqli_connect('localhost','root','','cityinfo');
	if(mysqli_connect_error()=='')
	{
		return $con;
	}
	else
	{
		 echo "database not connected";
	}
}
function reginsert($data)
{
	$query="insert into reg values('{$data['userid']}','{$data['name']}','{$data['password']}','{$data['image']}','{$data['email']}','{$data['address']}')";
	$result=mysqli_query(connect(),$query);
	if($result==true)
	{
		
		echo "insert sucessfull";
	}
	else
	{
		echo "uncessfull";
	}
}
function check($data)
{
	$query="select * from reg where userid='{$data['userid']}' and password='{$data['password']}'";
	
	$result=mysqli_query(connect(),$query);
	
	if(mysqli_num_rows($result)>0)
	{
		$_SESSION['user']=$data['userid'];
		header("location:index.php");
		
	}
	else
	{
		echo "login unsucessfull";
		
	}
	
}
function addcity($data,$path)
{
	
	$query="insert into city values('{$data['cityid']}','{$data['cityname']}','{$path}')";
		$result=mysqli_query(connect(),$query);
	
	if($result==true)
	{
		echo "city inserted";
		
	}
	else
	{
		echo " unsucessfull";
		
	}
	
}
function selectimage()
{
	$query="select * from city";
	$result=mysqli_query(connect(),$query);
		if(mysqli_num_rows($result)>0)
	{
		return $result;
	}
	else
	{
		return 0;
	}
}
function selectcountplace()
{
    $query="select count(*) count from place";
	$result=mysqli_query(connect(),$query);
	
	if(count($result)>0)
	{
		$row=mysqli_fetch_assoc($result);
		return $row['count']+1;  
		
	}
	else
	 return 1;
	
}
function addplace($data,$path)
{
	
	$query="insert into place values('{$data['placeid']}','{$data['cityname']}','{$data['placename']}','{$path}','{$data['placedesc']}')";
		$result=mysqli_query(connect(),$query);
	
	if($result==true)
	{
		echo "place inserted";
		
	}
	else
	{
		echo " unsucessfull";
		
	}
	
}

function selectplace($cityid)
{
	$query="select * from place where cityid={$cityid}";
	$result=mysqli_query(connect(),$query);
	if($result==true)
	{
		
	return	$result;
	}
	
}
function selectuser()
{
	$query="select * from reg where userid='{$_SESSION['user']}'";
	$result=mysqli_query(connect(),$query);
	if($result==true)
	{
		
		$row=mysqli_fetch_assoc($result);
	   echo "welcome".$row['name'];
	}
}

	
?>



