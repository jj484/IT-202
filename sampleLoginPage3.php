<!DOCTYPE html>
<html>
  
  <body>
    <form onsubmit="return false;">

      <input name="email" type="email"/>
      <input name="emailconfirm" type="email"/>
      <input name="password" type="password"/>
      <input name="passwordconfirm" type="password"/>
      <input name="username"/>
      
      <input type="submit" value="Submit"/>

    </form>
  </body>
  
  <script>
  
    function validateDropdown(){
      var status = false;

      return status;
    }
    
  </scripts>
  
</html>


/*
create a custom function that can dynamically handle a theoretical registration page (similar to previous homework)

Given:

<form onsubmit="return false;">

<input name="email" type="email"/>
<input name="emailconfirm" type="email"/>
<input name="password" type="password"/>
<input name="passwordconfirm" type="password"/>
<input name="username"/>

<input type="submit" value="Submit"/>

</form>

function should validate equality, empty, and simple email.
Should be determined by type of element and passed reference.
Should not use HTML5 "required" keyword.
Browser will automatically validate type="email" but code should also contain a simple check.

 

(1 pt) Validate matching emails
(1 pt) Validate matching passwords
(1 pt) Validate emails aren't empty
(1 pt) Validate passwords aren't empty
(1 pt) Validate username isn't empty
(1 pt) Validate emails are email addresses
(1 pt) Attach screenshot
(1 pt) Link to NJIT site
(2 pts) Link to github
*/