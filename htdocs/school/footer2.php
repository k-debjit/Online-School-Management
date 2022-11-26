                    </p>
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
	<?php
ob_end_flush();
?>
<!-- end #footer -->
</form>
</body>
</html>