<html>

  <!--
    RECEIVED HELP FROM NEVIN B
    AND FROM ONLINE TUTORIAL FOUND AT:
    https://www.youtube.com/watch?v=arqv2YVp_3E
  -->
</html>


<!--
ALTERNATIVE METHOD I GOT WORKING!
ISN'T WHAT IS CURRENTLY LIVE ON THE SITE
***HELPED ZACH BY USING MY CODE BELOW
-->

<?php
require('config.php');
$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";

$db = new PDO($conn_string, $username, $password);

$stm = $db->query("select * from users");
$result = $stm->fetch();
echo $result['username'];

if ($result['username'] == $_POST['usernameLog'] && $result['password'] == $_POST['passwordLog'] )
{
  echo "Login Succeded";
}
else {
  echo "Login Failed";
}  


<?php  

	$username = $_POST['usernameLog'];
	$password = $_POST['passwordLog'];
  
  	$link = mysql_connect("sql1.njit.edu", "jj484","fXm4MFaae");
	mysql_select_db("jj484");

   if (!$link) {
    die('Could not connect: ' . mysql_error());
   }

		$result = mysql_query("select * from users where username = '$username'") or die("failed to query database " .mysql_error());

		$row = mysql_fetch_array($result); 
  echo "Database username: ".$row['username']."<br>";
  echo "Entered username: ".$_POST['usernameLog']."<br>";
  
  $result = mysql_query("select * from users where password = '$password'") or die("failed to query database " .mysql_error());
  
  echo "Database password: ".$row['password']."<br>";
  echo "Entered password: ".$_POST['passwordLog']."<br>";
		if ($row['username'] == $username && $row['password'] == $password )
		{
				echo "Login Succeded";
		}

		else {
			echo "Login Failed";
		}

>    

