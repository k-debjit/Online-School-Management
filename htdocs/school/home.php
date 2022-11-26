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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<meta charset=utf-8 />

</head>
<body>


<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><font style="font-family:'Comic Sans MS', cursive">GREAT SCHOOL</font></a></h1>
			</div>
            
			<div id="menu">
           
            <table>
            <br/>
            <br/>
				<ul>
                <table>
                   <td> <li><a href="#"><div id="showmenu">Sign up</div></a></li></td>
                   <td><li><a href="signin.php">Sign in</div></a></li></td>
					<td><li><a href="staff.php">Teacher</a></li></td>
                    <td><li><a href="contact.php">Contact</a></li></td>
                    <td><li class="current_page_item"><a href="home.php">Homepage</a></li></td>
                    </table>
                                 <tr>
                                 
 <td>                                
<div class="menu" style="display: none; position: relative; color:#FFF; font-size:18px"><li><a href="teacher_signup.php">Teacher</a></li>
<li><a href="student_signup.php">Student</a></li></div></td>
                                
  <script>
    $(document).ready(function() {
        var first = true;

        // Hide menu once we know its width
        $('#showmenu').click(function() {
            var $menu = $('.menu');
            if ($menu.is(':visible')) {
                // Slide away
                $menu.animate({left: -($menu.outerWidth() + 10)}, function() {
                    $menu.hide();
                });
            }
            else {
                // Slide in
                $menu.show().css("left", -($menu.outerWidth() + 10)).animate({left: 0});
            }
        });
    });
  </script>

</tr>				
                </ul>    
                </table>
                
			</div>
		</div>
	</div>
                                            <?php
			$con=mysqli_connect('localhost','root','','school');
	if(mysqli_connect_error()=='')
	{
		$query="select * from notice";
		$result=mysqli_query($con,$query);
		while($row=mysqli_fetch_assoc($result))
        echo "<marquee behavior='scroll' direction='right' style='font-size:18px'>{$row['marq']}</marquee>";
			
	}
	?>
	<!-- end #header -->
	<div id="page">
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#"><font style="font-family:'Comic Sans MS', cursive">Welcome to the Great School</font></a></h2>
				<div class="entry">
					<p><a href="#"><img src="images/img05.jpg" width="600" height="319" alt="" /></a></p>
					<p><font style="font-family:'Comic Sans MS', cursive">This is <strong>Great School</strong>, a fully standards-compliant School in India.We care for your children because they are the future of our country.This school is only in the impression of excellence,discipline and dedication.Today we are in the top 10 rank in all over the country.We are successful because you believe in us.</font></p>
				</div>
			</div>
		</div>
		<!-- end #content -->
<?php
ob_start();
include_once("code.php");
?>

		<div id="sidebar">
			<ul>
				<li>
					<h2><font style="font-family:'Comic Sans MS', cursive">News &amp; Events</font></h2>
					<ul>
						<li><a href="teacherpdf.php"><font style="font-family:'Comic Sans MS', cursive">Teacher Schedule</font></a></li>
						<li><?php $name=name(2); echo"<a href='download.php?filename={$name}'>"; ?><font style="font-family:'Comic Sans MS', cursive"><?php $row=heading(2); echo "{$row['heading']}(Posted on: ".date('m/d/Y ' ,$row['timestamp']).")"; ?></font></a></li>
						<li><?php $name=name(3); echo"<a href='download.php?filename={$name}'>"; ?><font style="font-family:'Comic Sans MS', cursive"><?php $row=heading(3); echo "{$row['heading']}(Posted on: ".date('m/d/Y ' ,$row['timestamp']).")"; ?></font></a></li>
						<li><?php $name=name(4); echo"<a href='download.php?filename={$name}'>"; ?><font style="font-family:'Comic Sans MS', cursive"><?php $row=heading(4); echo "{$row['heading']}(Posted on: ".date('m/d/Y ' ,$row['timestamp']).")"; ?></font></a></li>
						<li><?php $name=name(5); echo"<a href='download.php?filename={$name}'>"; ?><font style="font-family:'Comic Sans MS', cursive"><?php $row=heading(5); echo "{$row['heading']}(Posted on: ".date('m/d/Y ' ,$row['timestamp']).")"; ?></font></a></li>
						<li><?php $name=name(6); echo"<a href='download.php?filename={$name}'>"; ?><font style="font-family:'Comic Sans MS', cursive"><?php $row=heading(6); echo "{$row['heading']}(Posted on: ".date('m/d/Y ' ,$row['timestamp']).")"; ?></font></a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page --> 
	<div id="featured-content">
		<div id="column1">
			<h2><font style="font-family:'Comic Sans MS', cursive">Teacher</font></h2>
			<p><img src="images/img06.jpg" width="300" height="150" alt="" /></p>
			<p></p>
			<p class="button"><a href="teacherlogin.php">Enter</a></p>
		</div>
		<div id="column2">
			<h2><font style="font-family:'Comic Sans MS', cursive">Student</font></h2>
			<p><img src="images/img07.gif" width="300" height="150" alt="" /></p>
			<p></p>
			<p class="button"><a href="studentlogin.php">Enter</a></p>
		</div>
		<div id="column3">
			<h2><font style="font-family:'Comic Sans MS', cursive">Parents</font></h2>
			<p><img src="images/img08.jpg" width="300" height="152" alt="" /></p>
			<p></p>
			<p class="button"><a href="parents.php">Enter</a></p>
		</div>
	</div>
</div>
<div id="footer">
        <p>
        <div align=center><font style="font-family:'Comic Sans MS', cursive">Developed by,KUMAR DEBJIT</font></div></p>

</div>
<?php
ob_end_flush();
?>
<!-- end #footer -->
</body>
</html>
