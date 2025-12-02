<?php 
if (isset($_POST["num1"]) && isset($_POST["num2"])) {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
}else{
    unset($num1);
    unset($num2);
}

if(isset($num1) && isset($num2)){
    echo "<p>A soma de $num1 + $num2 é ". ($num1+$num2) ."</p>";
   }
   ?>