<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
<body>

  <h3>Calculator</h3>
  <form action="trial.php" method="post">
    
    Number: <input type="number" name="num"> <br><br>

    <input type="submit"> 
  </form>
<br>
<?php

  function cube($num){
   return $num * $num * $num;
  }

  $cubeResult = cube($_POST["num"]);
  
  echo $cubeResult

?>

</body>
</html> 