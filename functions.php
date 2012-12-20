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

/* Date and time functions */

function isWeekday($date) {
	$d = date('w', strtotime($date));
	
	if($d != 6 &amp;&amp; $d != 0)
		return TRUE;
	else
		return FALSE;
}

function isWeekend($date) {
	$d = date('w', strtotime($date));
 
	if($d == 6 || $d == 0)
		return TRUE;
	else
		return FALSE;
}


/* General Functions */

function Init()
{
// Initialization Function

}

function countWords($words) {
	$result = array();
 
	$unique = array_unique($words);
	$unique = array_values($unique);
 
	// loop through the unique words to count them in the original words
	for($x = 0; $x &lt; count($unique); $x++) {
		$result[0][$x] = $unique[$x];
		$result[1][$x] = 0;
		
		foreach($words as $w) {
			if($unique[$x] == $w) {
				$result[1][$x] += 1;
			}
		}
	}
	
	return $result;
}
function capitalizeWords($words = array(), $str) {
	if(!empty($words) &amp;&amp; $str != '') {
		foreach($words as $word) {
			$str = str_replace($word, ucwords($word), $str);
		}
	}
	
	return $str;
}
function getColorShade($color) {
	$colors = array();
	
	for($x = 0; $x &lt; 255; $x++) {
		$c = '';
		
		switch($color) {
			case 'red':
				$c = dechex($x).'0000';
			break;
			case 'green':
				$c = '00'.dechex($x).'00';
			break;
			case 'blue':
				$c = '0000'.dechex($x);
			break;
			default:
				$c = '000000';
		}
		
		if(strlen($c) &lt; 6) {
			$c .= '0';
		}
		$colors[$x] = $c;
	}
	
	// remove duplicates and reset the indexes
	$colors = array_unique($colors);
	$colors = array_values($colors);
	
	sort($colors);
	
	return $colors;
}
function jsRedirect($url) {
	?&gt;
	&lt;script type=&quot;text/javascript&quot;&gt;
	window.location = &quot;&lt;?php echo $url; ?&gt;&quot;;
	&lt;/script&gt;
	&lt;?php
}
function filterURL($url) {
	if(strpos($url, 'http://') !== FALSE) {
		return $url;
	} else {
		if($url == '') {
			return '';
		} else {
			return 'http://'.$url;
		}
	}
}

?>
