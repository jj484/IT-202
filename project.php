


<html>



  <head>
    <!--
    DONE (20 pts) Table for your users
    DONE (20 pts) Login page to take username/password (or similar data per your project)
    DONE (20 pts) Values should hit the server side and verify against the database.
    DONE (20 pts) UI should show successful or unsuccessful login
    Should show some extra user details at least using a temporary var_export or similar
    DONE (5 pts) Attach screenshots of the page with results
    DONE (10 pts) Attach links to Github files
    DONE (5 pts) Attach project link on NJIT site (or equivalent)
    -->
    
      <p> <h1> Login Page </h1> <p>
      
      <p> 
        <form method="POST" action="action.php" onclick="onClick();">
          Username:
          <input type="text" name="usernameLog" id="usernameLog" placeholder="Username">  <br>
          PIN:
          <input type="password" name="passwordLog" id="passwordLog" placeholder="PIN"> <br>
          
          
          
          <!--
          <input type="password" name="password" placeholder="Enter password"/>
          <input type="password" name="confirm" placeholder="Re-Enter password"/>
          -->
          
          <input type="submit" value="Login"/>
          
        </form>
      
      </p>
      
      <p>
              
    </p>
    
<script>
function onClick(){
    alert("HI");

}
function onSubmit(){
  var username = form.usernameLog.value;
  var pin =  form.passwordLog.value;
  
  echo username;
}
</script>

  </head>
  <!--
<body>
<p> Output: </p>
<p id="output"></p>
</body>
  -->
</html>




