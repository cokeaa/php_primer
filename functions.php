<?php 
    $title = "Functions";
    include 'includes/header.php';?>
    <h1>Functions</h1>
    <?php
    //Define a Function

    function writeMessage(){
        echo "Life is a blessing, Give Thanks!!! <br/>";
    }
    
    //Calling a Function
    writeMessage();
    

    //Functions with Parameters
    //Adding Numbers

    function addFunction($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
    }
    //Pass by Reference - use ampersand (&) in parameter
    function changeNum(&$num){
        $num = $num + 10;
        // also written as $num+= 10;

    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    addFunction(15, 25);

    // using varibles instead of static values

    $num = 300;
    addFunction(15, $num);

    changeNum($num);
    echo $num . '<br/>';

    $return_value = returnProduct(10, 200);
    echo $return_value . '<br/>';


?>
    
    <?php require 'includes/footer.php';?>