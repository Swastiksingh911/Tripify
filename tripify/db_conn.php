<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";

$db_name = "test_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}