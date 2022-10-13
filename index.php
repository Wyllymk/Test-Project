<?php

  $num1 = $_POST["num1"]
  $num2 = $_POST["num2"]
  $op = $_POST["op"]



  function cube($num){
   return $num * $num * $num;
  }

  $cubeResult = cube($_POST["num"]);
  
  echo $cubeResult

?>
