<?php
      $title = "If Statement";
      include 'includes/header.php'
    ?>
    <h1><?php echo $title ?></h1>
    <?php

    // An If Statement that will carry out an action based on the value
    echo '<h2>If Statement</h2>';
    $grade = 50;
    // compares operators it can be ==, >, >, <=, >=, ===
    if($grade >= 50){
        echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
    }
    else{
        echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
    }

    $grade = 'A';
    if($grade == 'A'){
        echo '<h2 style="color: blue">YOU ARE A SUPERSSTART!</h2>';
    }
    elseif($grade == 'B'){
        echo '<h2 style="color: yellow">YOUR ARE DOING WELL!</h2>';
    }
    else{
        echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
    }
    //If-Else IF-Else

    ?>
  <?php require 'includes/footer.php'?>
