<?php

$hostname = "localhost";
$username = "root";
$password = "!@#$";
$dbname = "atmsupp";

//db connection
$connect = new mysqli($hostname, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
	die("Connection Failed : "  . $connect->connect_error);

}

else {
//	echo "Successfully connected";
}

?> 