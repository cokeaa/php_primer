<?php
    $title = "Index";
    include 'includes/header.php';?>
    <!-- Basic HTML -->
   <h1> Hello HTML -PHP Primer</h1>
   <br/>
    <?php 
    //Printing to HTML using echo 
    echo'Hello PHP!';
    echo'<br/>';
    echo'Second Line';
    echo'<br/>';
    ?>

    <?php
    //declare vaiable
    $name = 'Andrea Coke';
    $age = '30';
    //echo(print) variable

    echo $name;
    echo '<h1>My Name Is: '.$name.' </h1>';
    echo ' <h1>My Age Is: '.$age.' </h1>';
    //Echo using double quotes and interpolation
    echo "<h1>My name is: $name </h1>";

    ?>
    <button type="button" class="btn btn-primary">CLICK ME</button>
    <?php require 'includes/footer.php';?>
    