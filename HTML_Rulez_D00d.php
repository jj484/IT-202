
<!DOCTYPE html>


<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}
?>


<html>
  <head>




  </head>


  <body>
    <script>
    var myD = document.createElement("div");
    var myP = document.createElement("p"); 
    myP.innerText = 'new element added'; 
    document.body.appendChild(myD);
    myD.appendChild(myP);
    </script>

	<?php getName();?>
	<form mode="GET" action="#">
	<input name="name" type="text" placeholder="Enter your name"/>
	<input name="number" type="number" placeholder="Enter a number"/>
	<input name="password" type="password" placeholder="Enter a FAKE password"/>
	
	<label for="YES">Yes<label>
	<input type="radio" name="radio" id="No" value="No"/>

	<select name="dropdown">
	<option value="1">One</option>
	<option value="2">Two</option>
	<option value="3">Three</option>
	</select>
	<input type="checkbox" name="check"/>
	<textarea name="text"></textarea>
	<input type="date" name="date"/> 
	
	?>

  </body>


</html>


