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
<form action="" method="post"> 
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><font style="font-family:'Comic Sans MS', cursive">GREAT SCHOOL</font></a></h1>
			</div>
			<div id="menu">
				<ul>
                <table>
                    <td><li><a href="admin.php">Log in</div></a></li></td>
					<td><li><a href="staff.php">Teacher</a></li></td>
                    <td><li><a href="contact.php">Contact</a></li></td>
                    <td><li class="current_page_item"><a href="home.php">Homepage</a></li></td>
                    </table>
				</ul>
			</div>
		</div>
        
	</div>
	<!-- end #header -->
    <div style="clear: both;">&nbsp;</div>

		<div id="page">
		<div id="content">
			<div class="post">
			<center>	<h2 class="title"><a href="#"><font style="font-family:'Comic Sans MS', cursive">Welcome Admin</font></a></h2></center>
				<div class="entry">
					
                    <center><table>
                    <tr>
                    <td>USER-NAME</td><td><input name="username" type="text"/></td>
                    </tr>
                    <br/>
                    <br/>
                    <tr>
                    <td>PASSWORD</td><td><input name="password" type="password"/></td>
                    </tr>
                    <br/>
                    <br/>
                    <tr>
                    <td></td><td><input name="submit"
                    type="submit" value="Login"/></td>
                    </tr>
                    </table>

                    
                    
                    
                    </center>                    
                    
                    
				</font>
   
    <?php
	if(isset($_POST["submit"]))
	{
		
	if($_POST['username']=='admin' && $_POST['password']=='admin')		
	{

		header("location:control.php");
	}
	else
	{
		 echo "<center> Please enter valid username and password</center>";
	}

	}
	

?>	


                    </p>
</div>
			</div>
            
		</div>
		<!-- end #content -->
        		<div id="sidebar">
			<ul>
				<li>
					<h2><font style="font-family:'Comic Sans MS', cursive">News &amp; Events</font></h2>
					<ul>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Aliquam libero</font></a></li>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Consectetuer adipiscing elit</font></a></li>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Metus aliquam pellentesque</font></a></li>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Suspendisse iaculis mauris</font></a></li>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Urnanet non molestie semper</font></a></li>
						<li><a href="#"><font style="font-family:'Comic Sans MS', cursive">Proin gravida orci porttitor</font></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->


        <div style="clear: both;">&nbsp;
<div id="featured-content">

        
    </div>
    </div>

    </div> <!-- end of templatemo_content_wrapper -->

</div> <!-- end of templatemo_wrapper -->


<div id="footer">

	

    

	<p>Copyright (c) 2013 Sitename.com. All rights reserved. Images by <a href="http://fotogrph.com/">Fotogrph</a>. Design by <a href="http://www.freecsstemplates.org/" rel="nofollow">FCT</a>.</p>
    <p><div align=center><font style="font-family:'Comic Sans MS', cursive">Developed by,KUMAR DEBJIT</font></div></p>

</div>
	


</form>
</body>
</html>