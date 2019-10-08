<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";

if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}
if(isset($_GET['number1'])){
  $number1 = $_GET['number1']; 
}
if(isset($_GET['number2'])){
  $number2 = $_GET['number2'];
}
Concatenate($number1, $number2);



//Function to check if a parameter is a number
function IsNumber($num){  
  if(is_numeric($num)){
    return true;
  } else {
    return false;
  }  
}

function Concatenate($in1, $in2){
  if(IsNumber($in1)){
    echo "$in1 is a number";
  }
  else{
    echo "$in1 is not a number";
  }
  if(IsNumber($in2)){
    echo "<br> $in2 is a number";
  }
  else{
    echo "<br> $in2 is not a number";
  }
  
  
  $sum = $in1+$in2;
  echo "<br> $sum is the sum of $in1 and $in2";
  
  
}



?>

