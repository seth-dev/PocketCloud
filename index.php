<?php

/* Constant Variables */

$version="0.1"; // Define version for reference
$isbeta="1"; // Define if the version is beta. For info only.

/* Date and Time */

$tz = date_default_timezone_get();
$date = date('m/d/Y h:i:s a', time()); // Date and time

/* System Variables (auto) */

$requesturl="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$clientip=$_SERVER['REMOTE_ADDR'];
$useragent=$_SERVER['HTTP_USER_AGENT'];

/* Functions */

function Init()
{
// Initialization Function

}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="viewport" content="user-scalable=no, width=device-width" />

<!-- Prevent Elastic Scrolling -->

<script>
 function ScreenScroll(event) {
  // Window moving is a no-no
  event.preventDefault() ;
 }
</script>

<!-- end elastic prvention script -->

</head>
<body ontouchmove="ScreenScroll(event);" >



</body>
</html>
