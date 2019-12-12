<?php
//error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<header>
<title>Login Page</title>
</header>
<body>
<p> <h1>Login</h1> </p>

<p>
  <form method="POST" action="loginRedirect.php">
    
    <br> Enter Username <br>
    <input type="text" name="enteredUsername">
    
    <br> Enter Password <br>
    <input type="password" name="enteredPassword">
    
    <br>
    <input type="submit" name="Login">
  </form>
  
  </p>


</body>


</html>
