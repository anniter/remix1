<?php
session_start();
$urlist=file("index.txt");  //reads file index.txt into urlist array(line by line in the array)
$nl=count($urlist);         //counts the number of lines in the file
$np=rand(0,$nl-1);          //Gets a random number from 0 to the number of lines-1(arrays starts from 0 not 1)
$url=trim($urlist[$np]);   

$emm = $_SESSION['email'];
$me = $url.'#'.$emm;

?>
<html><head>
<meta HTTP-Equiv="refresh" content="0; URL=<?php echo $me; ?>">