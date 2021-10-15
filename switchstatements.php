<?php 
    $title = "Switch Statements";
    include 'includes/header.php'?>
    <h1> <?php echo $title ?> </h1>

    <?php 

        // Switch statement
        
        $grade ='A';
        
        switch ($grade){

            case 'A':
                echo '<h2 style = "color: green">Perfect!</h2>';
                break;
            case 'B':  
                echo '<h2 style = "color: green">Excellent!</h2>';
                break;
            case 'C':
                echo '<h2 style = "color: yellow">Good!</h2>';
                break; 
            case 'D':
                echo '<h2 style = "color: orange">Better luck next time</h2>';
                break; 
            default:
                echo '<h2 style = "color: Red">No Valid grade :(</h2>';
                break;
        }
    ?>
    <?php require 'includes/footer.php'?>
