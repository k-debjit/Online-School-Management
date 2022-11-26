<?php
include_once("header2.php");
?>
<?php
session_start();
session_destroy();
echo"<table align='center' style='font-size:18px'><td>You have successfully been loged out</td></table>";
?>
<?php
include_once("footer2.php")
?>