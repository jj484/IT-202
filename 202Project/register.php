<?php
//error reporting
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<header>
<title>Registration Page</title>
</header>
<body>
<p> <h1>Register</h1> </p>

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

<p> <h3>About This Project</h3> </p>
<p> This project is an database manager in which one can create an account and can add username-highscore pairs for a game project or any relevant usecase with a username-highscore pair. </p>


</body>


</html>
