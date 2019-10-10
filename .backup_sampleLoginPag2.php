<?php
  $username =  $_POST["username"];
  $password =  $_POST["password"];
  $confirmPassword =  $_POST["confirmPassword"];
  
  if($password == $confirmPassword){
    echo "YOUR PASSWORDS ARE THE SAME";
  }
  else{
    echo "YOUR PASSWORDS ARE DIFFERENT";
      $username =  null;
      $password =  null;
  }
?>

<html>
  <body>
  <form method="post" action="#" onsubmit="return validate();">
      Username: <br>
      <input type="text" name="username" placeholder="enter a username"> <br>
      Password: <br>
      <input type="password" name="password" placeholder="enter password"> <br>
      Confirm Password: <br>
      <input type="password" name="confirmPassword" placeholder="re-enter password"> <br>
      <span style="display:none;" id="validation.password"> </span>
      
      <br>
      YOUR PASSWORD IS: <?php echo $_POST["password"]; ?> <br>
      <br>
      YOUR CONFIRM PASSWORD IS: <?php echo $_POST["confirmPassword"]; ?> <br>
      
      <br> <br>
      <input type="submit" value="Submit Password">

  <!-- <input name="email" type="email" placeholder="name@example.com"/>
  <span id="validation.email" style="display:none;"> </span>--->



  </form>
  </body>
</html>

<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	var conf = form.confirm.value;
	console.log(password);
	console.log(conf);
	let pv = document.getElementById("validation.password");
	let succeeded = true;
	if(password == conf){
		
		pv.style.display = "none";
		form.confirm.className= "noerror";	
	}
	else{
		pv.style.display = "block";
		pv.innerText = "Passwords don't match";
		//form.confirm.focus();
		form.confirm.className = "error";
		//form.confirm.style = "border: 1px solid red;";
		succeeded = false;
	}
	var email = form.email.value;
	var ev = document.getElementById("validation.email");
	//this won't show if type="email" since browser handles
	//better validation. Change to type="text" to test
	if(email.indexOf('@') > -1){
		ev.style.display = "none";
	}
	else{
		ev.style.display = "block";
		ev.innerText = "Please enter a valid email address";
		succeeded = false;
	}
	/*
	add validation for a proper selection from dropdown.
	First element should be "Select One", and it should require that
	some other value is selected in order to proceed
	*/
	return succeeded;	
}
</script>
<style>
  input { border: 1px solid black; }
  .error {border: 1px solid red;}
  .noerror {border: 1px solid black;}
</style>   
   
   
   
   
   

<!---
DONE (1 pt) Must have username field
DONE (1 pt) Must have password field with proper masking
DONE (1 pt) Include a "confirm password" field
DONE? (1 pt) Form should POST to the same script
DONE (1 pt) Script should handle the parameters and show it on the screen as a sample
DONE (2 pt) Don't let the form submit if "password" doesn't match "confirm password"
DONE? (1 pt) This may be done in JS or php for now, but in the future both should verify
DONE (1 pt) Attach screenshot of results
DONE (1 pt) Attach link to NJIT site location
DONE (1 pt) Attach github link to the file
--->
