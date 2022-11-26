<?php
include_once("header.php");
include_once("code.php");
?>


<?php
selectuser();
$result=selectimage();

	while($row=mysqli_fetch_assoc($result))
	{
		echo "<div class='imagedisplay'><a href='placeinfo.php?cityid={$row['cityid']}'><img src='{$row['photo']}' alt='image' height='230px' width='150px'></br>{$row['cityname']}</a></div>";
	
}
?>
<div style="clear:both"></div>



<?php
include_once("footer.php");
?>