



<?php
require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

echo $conn_string."<br>";
$db = new PDO($conn_string, $username, $password);

$stm = $db->query("select * from users");
$result = $stm->fetch();

echo $result['username'];
echo $result['password'];

if ($result['username'] == $_POST['usernameLog'] && $result['password'] == $_POST['passwordLog'] )
{
  echo "Login Succeded";
}
else {
  echo "Login Failed";
}  


?>