<?php
header("content-disposition:attachment;filename={$_GET['filename']}");
$file=fopen("news/{$_GET['filename']}","r");
while(!feof($file))
{
	echo fgets($file);
}
fclose($file);
?>