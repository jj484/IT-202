<!---
(2 pts) Add a dropdown element with a default first element of "Select One"
(4 pts) Add JavaScript validation to allow the form to submit only if a different value than "Select One" was chosen.
Try to theme the dropdown towards something you might use in your project
(2 pts) Provide NJ Site Link
(2 pts) Provide Github Link
--->

<!DOCTYPE html>
<html>
  <body>
    <form onsubmit="return checkDropDownValue();">
      <select id="dropdown">
        <option> Select One </option>
        <option> option 1 </option>
        <option> option 2 </option>
      
      </select>  
      
      <input type="submit" id="Submit" value="submit the form">
    <form>
    <p id="demo"></p>
  </body>



  <script>
    function checkDropDownValue(){
      var x = document.getElementById("dropdown").value;
      var status = false;
      if(x == "Select One"){
        
        document.getElementById("demo").innerHTML = "Select an option";
      }
      else{
        status = true;
      }

      return status;
    }

    function validateDropdown(){
      var status = false;

      return status;
    }
  </script>



</html>