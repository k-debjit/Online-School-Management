<?php
include_once("a_header.php");
?>

<?php
$arr;
$x=array();
$y=array();
$i=0;

foreach($_POST as $key => $value)
{
	$x[$i]=$key;
	$i++;
}

$con=mysqli_connect('localhost','root','','school');
if(isset($_POST['submit']))
{
		$path="pics/".$_FILES['photo']['name'];
	$up=move_uploaded_file($_FILES['photo']['tmp_name'],"pics/".$_FILES['photo']['name']);

	
	if(mysqli_connect_error()=='')
	{
		for($j=0;$x[$j]!= 'submit';$j++)
		{
			
			$y[$j]="'{$_POST[$x[$j]]}'";
			

		}
		
		
		$arr=implode(",",$y);
		$query="insert into studentlist values ($arr,'{$path}')";
		$result=mysqli_query($con,$query);
	}
		echo"<table align='center'><td>Student has been successfully added</td></table>";

}
?>

<script>
$(document).ready(function(){
	$("#form1").validate({
		rules :{
			roll:{
				required : true
			},
			name :{
				required : true

			},
						password :{
				required : true,
				minlength : 5
			},
				age :{
				required : true
	
			},
			dateofbirth :{
				required : true
			
			},
			religion :{
				required : true,
		
			},
			contactno :{
				required : true
			},
			address :{
				required : true,

			}
		}
	});
});
</script>


<table align="center">
                    <h1 style="border-bottom:dotted">Student Form</h1>
                   <tr>
                   <td>Roll</td><td><input name="roll" type="text"></td>
                   </tr>
                   <tr>
                   <td>Name</td><td><input name="name" type="text"></td>
                   </tr>
                                      <tr>
                   <td>Password</td><td><input name="password" type="text"></td>
                   </tr>

                   <tr>
                   <td>Class</td><td>
                   <select name="class" size="" >
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
                    </select>
                    </td>
  
                   </tr>
                   <tr>
                   <td>Section</td><td>
                    <select name="section">
                    <option selected>A
                    <option>B
                    <option>C
                    <option>D                    </select></td>
                   </tr>
                   <tr>
                   <td>Gender</td><td><input name="gender" type="radio" value="male" />Male
                   <input name="gender" type="radio" value="female" />Female
                   
                   </td>
                   
                   </tr>
                   <tr>
                   <td>Age</td><td><input name="age" type="text"></td>
                   </tr>
                   <tr>
                   <td>Date of birth</td><td><input name="dateofbirth" type="date"></td>
                   </tr>
                                      <tr>
                   <td>Religion</td><td><input name="religion" type="text"></td>
                   </tr>
                   <tr>
                   <td>Contact No</td><td><input name="contactno" type="text"></td>
                   </tr>
                   <tr>
                   <td>Mailing Address</td><td><textarea name="address" cols="17" rows="2"></textarea></td>
                   </tr>


                   <tr>
                   <td>Photo</td><td><input name="photo" type="file">
</td>
                   </tr>
                   <tr>
                   </tr>
                   <tr>
                   <td><input name="submit" type="submit" value="Add"  /></td>
                   </tr>                   

</table> 




                  


<?php
include_once("footer2.php");
?>