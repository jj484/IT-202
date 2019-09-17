<?php
ini_set('display errors', 1);
ini_set('display_startup_errors, 1');
error_report(E_ALL);

require('config.php');
echo $host;

$connection_string = "mysql:host=$host;dbname=$database;username=$username;
password=$password;charset=utf8mb4";

try{
	$db = new PDO($connection_string);
	echo "Should have connected";
} catch {
	echo $e->getMessage();
	exit("It didn't work");
}x
?>
