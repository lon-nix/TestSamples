<?php 
    $title = "Switch Statements";
    include 'includes/header.php'?>
    <h1> <?php echo $title ?> </h1>
    <?php 

        // If statement operations using variables
        echo '<h2>If Statement</h2>';

        $grade = 50;

        if ($grade>=50)
        {
            echo '<h3 style = "color: green">You have Passed!</h3>';
        }else{
            echo '<h3 style = "color: red">You have Failed!</h3>';
        }
        $grade ='A';
        //If-Else If Statement
        if ($grade =='A')
        {
            echo '<h2 style = "color: green">Perfect!</h2>';
        }elseif ($grade =='B')
        {
            echo '<h2 style = "color: green">Excellent!</h2>';
        }elseif ($grade =='C')
        {
            echo '<h2 style = "color: orange">Good!</h2>';
        }elseif ($grade =='D')
        {
            echo '<h2 style = "color: Red">Better luck next time</h2>';
        }
        
    ?>
    <?php require 'includes/footer.php'?>
