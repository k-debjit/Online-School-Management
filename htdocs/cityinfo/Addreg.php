
<?php
include_once("header.php");
include_once("code.php");
?>
<script>
$(document).ready(function() {
	$("#form1").validate({
    rules:{
		userid:{
			     required:true,
		          minlength: 3
		        },
		name:{
			required: true
		
		},
	
	password :{
		        required: true,
				minlength: 5

	},
	cpassword: {
				required: true,
				minlength: 5,
				equalTo: "#password"
	           },
			   email:{
			   required:true,
			   email:true
			   }
	
			},

	messages:{
		userid:{
		          required:"username required",
				  minlength:"string is too short"
	            },
				name:{
			required: "please enter username"
		
		},
				password :{
		        required: "please provide a password",
				minlength: "password is too short"

				},
	cpassword: {
				required: "please re-enter the password",
				minlength: "password is too short"
				
			},
			email:{
			   
			   email:"enter a valid email address"
			   }
	         }
	});
	   
});
</script>



<div id="mainbody" >
<div class="body1">

<table>
<tr>
<td>CITY</td>
</tr>
<tr>
<td>City-Id</td><td><input name="cityid" type="text" /></td>
</tr>
<tr>
<td>City-Name</td><td><input name="cityname" type="text" /></td>
</tr>
<tr>
<td>City-Photo</td><td><input name="photo" type="file" /></td>
</tr>
</table>

</div>
<div class="body2">
<table>
<tr>
<td>REGISTRATION</td>
</tr>
<tr>
<td>User-Id</td><td><input name="userid" type="text" /></td>
</tr>
<tr>
<td>User-Name</td><td><input name="name" type="text" /></td>
</tr>
<tr>
<td>Password</td><td><input id="password" name="password" type="password" /></td>
</tr>
<tr>
<td>Confirm Password</td><td><input name="cpassword" type="password" /></td>
</tr>
<tr>
<td>Image</td><td><input name="image" type="file" /></td>
</tr>
<tr>
<td>Email</td><td><input name="email" type="text" /></td>
</tr>
<tr>
<td>Adress</td><td><input name="address" type="text" /></td>
</tr>
</table>
</div>
<table>
<tr>
<td>PLACE</td>
</tr>
<tr>
<td>Plce-Id</td><td><input name="placeid" type="text" /></td>
</tr>
<tr>
<td>City-Id</td><td><input name="cityid" type="text" /></td>
</tr>
<tr>
<td>Place-Name</td><td><input name="placename" type="text" /></td>
</tr>
<tr>
<td>Photo</td><td><input name="photo" type="file" /></td>
</tr>
<tr>
<td>Place-Description</td><td><input name="placedesc" type="text" /></td>
</tr>
</table>

</div>
<table>
<tr>
<td align="right"><input name="Submit" type="submit" value="Register" /></td>
</tr>
<?php
echo "hello";
if(isset($_POST['Submit']))
{
	
	reginsert($_POST);
}
?>
</table>

<?php
include_once("footer.php");
?>
