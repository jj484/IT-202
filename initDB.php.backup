
<?php
#turn error reporting on
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//pull in config.php so we can access the variables from it
require('config.php');
echo "Loaded Host: " . $host;
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
	$db = new PDO($conn_string, $username, $password);
	echo "Connected";
	$query = "create table if not exists `TestUsers`(
		`id` int auto_increment not null,
		`username` varchar(30) not null unique,
		`pin` int default 0,
		PRIMARY KEY (`id`)
		) CHARACTER SET utf8 COLLATE utf8_general_ci";
	$stmt = $db->prepare($query);
	$r = $stmt->execute();
	echo "<br>" . $r . "<br>";

	$insert_query = "INSERT INTO `TestUsers`( `username`, `pin`) VALUES ('Vanessa', 2002)";
	$stmt = $db->prepare($insert_query);
	$r = $stmt->execute();

	echo "<br>" . ($r>0?"Insert successful":"Insert failed") . "<br>";

	$select_query = "select * from `TestUsers` where username = :username";



	$stmt = $db->prepare($select_query);
	$r = $stmt->execute(array(":username"=> "Vanessa"));
	$results = $stmt->fetch(PDO::FETCH_ASSOC);

	echo "<pre>" . var_export($results, true) . "</pre>"; 

}
catch(Exception $e){
	echo $e->getMessage();
	exit("Something went wrong");
}
?>
