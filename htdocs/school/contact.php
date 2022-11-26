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
<title>Breakeven by FCT</title>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Abel|Satisfy' rel='stylesheet' type='text/css'>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="scripts/jquery.cycle.lite.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#myslides').cycle({
		fit: 1, pause: 1, timeout: 4000
	});
});
</script>
<link rel="stylesheet" href="styles/dynamicslides.css" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><font style="font-family:'Comic Sans MS', cursive">GREAT SCHOOL</font></a></h1>
			</div>
			<div id="menu">
				<ul>
                <table>
                   <td> <li><a href="#"><div id="showmenu">Sign up</div></a></li></td>
                   <td><li><a href="signin.php">Sign in</div></a></li></td>
					<td><li><a href="staff.php">Teacher</a></li></td>
                    <td><li><a href="contact.php">Contact</a></li></td>
                    <td><li class="current_page_item"><a href="home.php">Homepage</a></li></td>
                    </table>
				</ul>
			</div>
		</div>
	</div>
    		<!-- end #content -->
		<div id="sidebar">
					<h2>Address</h2>
        Kalinga institute of industrial technology
        Bhubaneswar,Odisha 751024
        <h3 style="border-bottom:dashed"></h3>
					<h2>Voice</h2>
                   +916742725113,2378550
                           <h3 style="border-bottom:dashed"></h3>
					<h2>Tele Fax</h2>
                     +916742725113
                             <h3 style="border-bottom:dashed"></h3>
					<h2>Email</h2>
                   kiit@kiit.ac.in
		
		</div>
		<!-- end #sidebar -->
<br />
<br />
<table align="center">
<tr>
<td>
<?php
$directory = 'slide/slideshow'; 	
try {    	
	// Styling for images	
	echo '<div id="myslides">';	
	foreach ( new DirectoryIterator($directory) as $item ) {			
		if ($item->isFile()) {
			$path = $directory . '/' . $item;	
			echo '<img src="' . $path . '"/>';	
		}
	}	
	echo '</div>';
}	
catch(Exception $e) {
	echo 'No images found for this slideshow.<br />';	
}
?>
</td>
</tr>
</table>
<table align="center">
<tr>
<td>School information centre is a vital office of the Great School.Strategically situated at the main entrance of the campus,UIC serves as a centralized information system of facilitate authentic and quick information flow to the visitors,staff and students about various programmes,departments and activities of School.The centre is headed by Sr. public information officer,Great School</td>
</tr>

</table>
		</div>
	</div>
</div>
<div id="footer">
	
        <p><div align=center>This Webpage Developed by:- KUMAR DEBJIT</div></p>

</div>
<!-- end #footer -->
</body>
</html>
