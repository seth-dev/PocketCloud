<?php
/* Import Files */
include 'functions.php';
/* Coding goes below this line */

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
</head>
<body ontouchmove="ScreenScroll(event);" >

</body>
</html>
