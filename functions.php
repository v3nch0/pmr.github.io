<?php

        $title = "Functions";
        include 'includes/header.php'
    ?>
    <h1><?php echo $title ?></h1>
    <?php
    
        /** 
         * 
         * Defining a Function
         * 
        */

        function writeMessage(){
            echo "You are really a nice person, Have a nice time! <br/>";
        }

        /* Calling a Function*/

        writeMessage();
        writeMessage();
        echo "<hr/>";
        writeMessage();

        /* Functions with parameters*/

        function addFunction($num1,$num2){
            $sum = $num1 + $num2;
            
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        /*Pass by Reference - Use ampersand in parameter*/
        function changeNum(&$num){
            //the '&' simbol gives the value change the variable
            $num = $num + 10;        
            // $num+= 10;

        }


        function returnProduct($num1,$num2){
            $prod = $num1 * $num2;
            return $prod;
        }




        addFunction(10,20);

        $num = 500;
        addFunction(10,$num);
        addFunction('10','50');
        echo $num . '<br/>';

        changeNum($num);

        echo $num . '<br/>';


        $return_value = returnProduct(10,200);
        echo $return_value . '<br/>';


    ?>



<?php require 'includes/footer.php'?>
