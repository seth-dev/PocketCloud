<?php
/* Import Files */
include 'cryptography.php';
include 'functions.php';
/* Coding goes below this line */

$usrq=isiPad();
if ($usrq !== "false") {
  jsRedirect("not-tablet.html");
}


?>
<!DOCTYPE html>
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="viewport" content="user-scalable=no, width=device-width" />
<!-- some scripts, shall we? -->
<script src="jQuery.js"></script>
<!-- Prevent Elastic Scrolling -->
<script>
 function ScreenScroll(event) {
  // Window moving is a no-no
  event.preventDefault() ;
 }
</script>
<!-- end elastic prvention script -->
<!-- Some CSSes -->
<link rel="stylesheet" href="pocketcloud.main.css" />

</head>
<body ontouchmove="ScreenScroll(event);" >

</body>
</html>
