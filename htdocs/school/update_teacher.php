<?php
session_start();
include_once("a_header.php");
include_once("code.php");
?>
<?php
$id=$_SESSION['id'];
$row=update($id);
    if(isset($_POST['update']))
	{
		$path="pics/".$_FILES['photo']['name'];
$up=move_uploaded_file($_FILES['photo']['tmp_name'],"pics/".$_FILES['photo']['name']);

				$arr;
                $x=array();
                $y=array();
                $i=0;

               foreach($_POST as $key => $value)
               {
	            $x[$i]=$key;
	            $i++;
                }
			for($j=0;$x[$j]!='update';$j++)
		       {
			$y[$j]="'{$_POST[$x[$j]]}'";
		
		       }
			   $arr=implode(",",$y);

               $con=mysqli_connect('localhost','root','','school');
               	if(mysqli_connect_error()=='')
	{
		$query="DELETE FROM teacherlist WHERE id={$id}";
		$result=mysqli_query($con,$query);

		
		if($up==true)
		$query="insert into teacherlist values ($arr,'{$path}')";
		else
		$query="insert into teacherlist values ($arr,'{$row['photo']}')";
		$result=mysqli_query($con,$query);
	}
			echo"<table align='center'><td>Teacher has been successfully updated</td></table>";           
}		
?>
	<table align="center">
    <tr>
    	<td>Id</td><td><input name='id' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['id']}'";
		?>
        />
	                 
                    </td>
                   </tr>
                   <tr>
                   <td>Name</td><td><input name='name' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['name']}'";
		?>
                   />

                    </td>
                    
                   </tr>
                                      <tr>
                   <td>Password</td><td><input name='password' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['password']}'";
		?>
                   />

                    </td>
                    
                   </tr>

                   <tr>
                   <td>Qualification</td><td><input name='qualification' type='text' value=
                           <?php
		$row=update($id);
        echo "'{$row['qualification']}'";
		?>

                   /></td>

                    

                    </tr>
                                      <tr>
                   <td>Post</td><td><input name='post' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['post']}'";
		?>
                   />

                    </td>
                    
                   </tr>

                   <tr>
                   <td>Gender</td><td><input name='gender' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['gender']}'";
		?>
                   /></td>         
                   </tr>
                   <tr>
                   <td>Age</td><td><input name='age' type='text' value=
                           <?php
		$row=update($id);
        echo "'{$row['age']}'";
		?>

                   /></td>
                   </tr>
                   <tr>
                   <td>Date of birth</td><td>
                    <input name='dateofbirth' type='date' value=
        <?php
		$row=update($id);
        echo "'{$row['dateofbirth']}'";
		?>
                    /></td>
                   </tr>
                                      <tr>
                   <td>Religion</td><td><input name='religion' type='text' value=
        <?php
		$row=update($id);
        echo "'{$row['religion']}'";
		?>
                   /></td>
                   </tr>
                   <tr>
                   <td>Contact No</td><td><input name='contactno' type='text' value=        <?php
		$row=update($id);
        echo "'{$row['contactno']}'";
		?>

                   /></td>
                   </tr>
                   <tr>
                   <td>Mailing Address</td><td><input name='address' type='text' value=
                           <?php
		$row=update($id);
        echo "'{$row['address']}'";
		?>

                   />
                   </td>
                   </tr>
                   <tr>
                   <td>Photo</td><td>
                           <?php
		$row=update($id);
        echo "<img src='{$row['photo']}'alt='image' width='200px'>";
				   ?>

                   </td>
				   <td>
				   
                   <table>
				   <tr>
				   <td><b>Upload a new photo</b></td>
				   </tr>
				   <tr>
				   <td><input name='photo' type='file'></td>
				   </tr>
				   </table>
				   
				   </td>
                   </tr>
                    <tr>	

           <td><input name='update' type='submit' value='Update'></td>
           </tr>
           		</table>
		
	
	<?php
	/*using database
	
	if(isset($_POST['update']))
		{
			$row1=update();
		 
			$con=mysqli_connect('localhost','root','','school');
		   
		if(mysqli_connect_error()=='')
	{
		if($row1['id']!=$_POST['id'])
		 {
			 $old=$row1['id'];
			 $new=$_POST['id'];
		$query="UPDATE teacherlist SET id=$new
                                    WHERE id=$old";
               mysqli_query($con,$query);

		 }
		 delete($old);
	}
		}*/
		
		
?>
<?php
include_once("footer2.php");
?>