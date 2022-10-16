<?php 
    $title = "String Manipulation";
    include 'includes/header.php';?>
    <h1>String Manipulation</h1>
    <?php
    //declare variable and concatenation of strings using a (.).
        $phrase1 = "Student in Grade Two";
        $phrase2 ="doing Gymnastics";
        $name = " andrea coke";
        echo $phrase1 . ", named Anna,". $phrase2 . "<br/>";
        echo '<hr/>';
        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word' . ucwords($name) .'<br>';
        echo'Uppercase: '.strtoupper($name). '<br/>';
        echo 'Lowercase: '.strtolower("THIS WAS ALL UPPERCASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String:' , str_repeat('a',10). '<br/>';
        echo 'Repeat String - Nested Function:' , strtoupper(str_repeat('a',10)). '<br/>';
        echo 'Get Substring:' .substr($name, 4, 7).'<br/>';

        echo 'Get position of string:' .strpos($name,'c').'<br/>';
        // Returns Null
        //echo 'Get position of sting:' 
        echo 'Find Character "D": '. strchr($name, 'D').'<br/>';
        echo 'Find Character "d": '. strchr($name, 'd').'<br/>';
        echo 'Find Character "e": '. strchr($name, 'e').'<br/>';
        echo 'Find Character "o": '. strchr($name, 'o').'<br/>';

        echo'Find length of String:' . strlen($name). '<br/>';

        echo'Without Trim:'. "A" . "B" ."C" ."D" ."E" . '<br/>';
        echo'Trim spaces on both sides:' ."A" .trim(" B C D ") . "E" .'<br/>';
        echo'Trim spaces to the left sides:' ."A" .ltrim(" B C D ") . "E" .'<br/>';
        echo'Trim spaces to the right sides:' ."A" .rtrim(" B C D ") . "E" .'<br/>';

        echo'Replace string with another:' . str_replace("Gymnastics", "Karate", $phrase2). '<br/>';
        
  

?>
    
    <?php require 'includes/footer.php';?>