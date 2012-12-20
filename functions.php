<?php
/* functions.php for PocketCloud */


/* Date and Time */

$tz = date_default_timezone_get();
static $date;
$date = date('m/d/Y h:i:s a', time()); // Date and time

/* System Variables (auto) */

$requesturl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$clientip=$_SERVER['REMOTE_ADDR'];
$useragent=$_SERVER['HTTP_USER_AGENT'];
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');

/* Functions */

function Init()
{
// Initialization Function

}

?>
