<?php
    $title = "For Loop";
    include 'includes/header.php'?>
    
<h1> <?php echo $title ?> </h1>
    <?php 

        // For Loop
        
        for ($count=0; $count < 10; $count++)
        {
            echo '<p>Life Is Good!</p>';
        }
        
        for ($count=0; $count < 10; $count++)
        {
            //interpolation
            echo "<p> The counter is: $count </p>";
            
        }
    ?>
    <?php require 'includes/footer.php'?>
