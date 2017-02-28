<?php
$thishost=$_SERVER['SERVER_NAME'];

if ($thishost=="boyco.tt"){
	// DEBUG VERSION RUNNING LOCALLY
	// UPDATE WITH LOCAL HOST DETAILS
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "4me2cnow";
$dbname = "coffsonline";

} elseif ($thishost=="192.168.0.105"){
	$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "4me2cnow";
$dbname = "coffsonline";
$thishost="192.168.0.105/boycott";

} else {
	// PRODUCTION VERSION DATABASE ETC
	
		$dbservername = "localhost";
$dbusername = "boycott";
$dbpassword = "qW5aPCLeRpn2WwYT";
$dbname = "boycott";
}

?>