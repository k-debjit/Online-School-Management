<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log to the DataBase
mysql_connect('localhost', 'root', '');
mysql_select_db('mes');

//Webmaster Email
$mail_webmaster = 'ratbis29@yahoo.com';

//Top site root URL
$url_root = 'http://www.yahoo.com/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>