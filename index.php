    <?php
        $title = "Index";
        include 'includes/header.php'
    ?>
    <h1><?php echo $title ?></h1>
    <?php 
    
        /*
        Multiple 
        Lines of
        Comments
        */
        

        //Printing to HTML using echo

        echo 'Hello PHP!';
        echo 'Second line without br tag';
        echo '<br/>';
	echo 'Second Realy Line';
    ?>
    <?php
    	
	//declare variable
        $name = 'Jean Steven';
	$age = 31;
	echo '<br/>';
	//echo variable
	echo $name;
	echo '<h1>My Name Is: '.$name.' </h1>';
	echo '<h1>My Age Is: '.$age.' </h1>';

	//with double coutation
	echo "<h1>My Name Is: $name </h1>";

    ?>

    <button type="button" class="btn btn-dark">Click me!</button>

 <?php require 'includes/footer.php'?>
