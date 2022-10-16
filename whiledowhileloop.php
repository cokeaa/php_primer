<?php 
    $title = "While Loop Statements";
    include 'includes/header.php';?>
    <h1>While Loop Statements</h1>
    <?php
        $grade = 0;
        // infinite loop
        // while($grade < 10){
        //  echo'<p>I AM LESS THAN 10!</p>';
       // }

       while ($grade < 10){

        echo'<p>I AM LESS THAN 10!</p>';
        $grade++;
       }

       echo 'EXIT LOOP!';

    ?>

    <h1>Do-While Loop Statements</h1>
    <?php
    //Post Condition Loop
    $grade = 0;
        do{

            echo'<p>I AM DO WHILE LOOP!</p>';
            $grade++;

        }while($grade < 10);

        echo 'EXIT LOOP!';

    ?>
    
    <?php require 'includes/footer.php';?>