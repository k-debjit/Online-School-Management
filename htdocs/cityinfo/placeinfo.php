
<?php
include_once("header.php");
include_once("code.php");
?>
<?php
$result=selectplace($_GET['cityid']);

	while($row=mysqli_fetch_assoc($result))
	{
		echo "<div class='imagedisplay'><a href='placedetail.php?cityid={$_GET['cityid']}'><img src='{$row['photo']}' alt='image' height='230px' width='150px'></br>{$row['placename']}</a></div>";
	
}
?>
<div style="clear:both"></div>
<?php
include_once("footer.php");
?>