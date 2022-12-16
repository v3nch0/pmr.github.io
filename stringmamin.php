<?php
        $title = "String Manipulation";
        include 'includes/header.php'
    ?>
    <h1><?php echo $title ?></h1>
    <?php
    
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with rock";
        $name = "jean steven";
        echo $phrase1 . ", named xxx ". $phrase2; // you can add any message into it
        //It's no same line  without the space      echo $phrase2;
        echo '<br/>';

        echo '<hr/>';
        //String Transformation
        echo 'Uppercase first letter: '. ucfirst($name).'<br/>';

        echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';

        echo 'Upper case: '. strtoupper($name). '<br/>';
        echo 'Lower case: ' .strtolower("THIS WAS ALL UPPER CASE"). '<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Repeat String: ' . str_repeat($name ,10) . '<br/>';

        echo 'Get a Substring: ' . substr($name, 3, 5). '<br/>';


        echo 'Get position of string: ' . strpos($name, 't'). '<br/>';

        //Returns NULL
        // echo 'Get position of string: ' . strpos($combine, 'z').'<br/>';
        echo 'Find Character "s": ' . strchr($name, 's') . '<br/>';
        echo 'Find Character "j": ' . strchr($name, 'j') . '<br/>';
        echo 'Find Character "n": ' . strchr($name, 'n') . '<br/>';
        echo 'Find Character "e": ' . strchr($name, 'e') . '<br/>';


        echo 'Find Length of String: ' . strlen($name) . '<br/>';

        echo 'Without Trim: ' . "A" . "B C D" . "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim("B C D") . "E" . '<br/>';
        echo 'Trim spaces to the left: ' . "A" . ltrim("B C D") . "E" . '<br/>';
        echo 'Trim spaces to the rigth: ' . "A" . rtrim("B C D") . "E" . '<br/>';

        echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2). '<br/>';


    ?>
    <?php require 'includes/footer.php'?>
