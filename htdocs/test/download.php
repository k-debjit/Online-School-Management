
<?php
   
	header("Content-Disposition:attachment;filename={$_GET['filename']}");
	$file=fopen("images/{$_GET['filename']}","r");
	while(!feof($file))
	{
		echo fgets($file);
	}
	fclose($file);
?>
