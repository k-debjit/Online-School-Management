<?php
session_start();
include_once("a_header.php");
include_once("code.php");
?>
<?php
$roll=$_SESSION['roll'];
$row=stupdate($roll);
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


               $con=mysqli_connect('localhost','root','','school');
               	if(mysqli_connect_error()=='')
	{
		$query="DELETE FROM studentlist WHERE roll={$roll}";
		$result=mysqli_query($con,$query);

		$arr=implode(",",$y);
		if($up==true)
		$query="insert into studentlist values ($arr,'{$path}')";
		else
		$query="insert into studentlist values ($arr,'{$row['photo']}')";
		$result=mysqli_query($con,$query);
	}
		echo"<table align='center'><td>Student has been successfully updated</td></table>";
}		
?>
	<table align="center">
    <tr>
    	<td>Roll</td><td><input name='roll' type='text' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['roll']}'";
		?>
        />
	                 
                    </td>
                   </tr>
                   <tr>
                   <td>Name</td><td><input name='name' type='text' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['name']}'";
		?>
                   />

                    </td>
                    
                   </tr>
                                      <tr>
                   <td>Password</td><td><input name='password' type='text' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['password']}'";
		?>
                   />

                    </td>
                    
                   </tr>

                   <tr>
                   <td>Class</td><td><input name='class' type='text' value=
                           <?php
		$row=stupdate($roll);
        echo "'{$row['class']}'";
		?>

                   /></td>

                    

                    </tr>
                                       <tr>
                   <td>Section</td><td><input name='section' type='text' value=
                           <?php
		$row=stupdate($roll);
        echo "'{$row['section']}'";
		?>

                   /></td>

                   
                   <tr>
                   <td>Gender</td><td><input name='gender' type='text' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['gender']}'";
		?>
                   /></td>         
                   </tr>
                   <tr>
                   <td>Age</td><td><input name='age' type='text' value=
                           <?php
		$row=stupdate($roll);
        echo "'{$row['age']}'";
		?>

                   /></td>
                   </tr>
                   <tr>
                   <td>Date of birth</td><td>
                    <input name='dateofbirth' type='date' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['dateofbirth']}'";
		?>
                    /></td>
                   </tr>
                                      <tr>
                   <td>Religion</td><td><input name='religion' type='text' value=
        <?php
		$row=stupdate($roll);
        echo "'{$row['religion']}'";
		?>
                   /></td>
                   </tr>
                   <tr>
                   <td>Contact No</td><td><input name='contactno' type='text' value=        <?php
		$row=stupdate($roll);
        echo "'{$row['contactno']}'";
		?>

                   /></td>
                   </tr>
                   <tr>
                   <td>Mailing Address</td><td><input name='address' type='text' value=
                           <?php
		$row=stupdate($roll);
        echo "'{$row['address']}'";
		?>

                   />
                   </td>
                   </tr>
                   <tr>
                   <td>Photo</td><td>
                           <?php
		$row=stupdate($roll);
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
include_once("footer2.php");
?>