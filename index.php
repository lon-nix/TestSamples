<?php 
    $title = "Index";
    include 'includes/header.php'?>

    <!-- Basic HTML-->
    <h1><?php echo $title ?> </h1>
    <?php
        //Printing to HTML using echo
        echo 'Test Samples';
        //breaking the line(new line)
        echo '</br>';
        echo 'NEW line ';
        
        //Declarin variables 
        $name = 'Lon-Nix';
        $age = 31;
        //Printing  variable to HTML.
        echo '</br>';
        echo $name;
        //Concate string and variable (static and dynamic content("variable"))           
        echo '<H2> My Name Is: '.$name.'</h2>';

        echo '<H2> My Age Is: '.$age.'</h2>';

        //Using double qoutes
        echo "<H2> My Name Is: $name </h2>";
    
    ?>

    <button type="button" class="btn btn-outline-primary btn-sm">Click Here</button>

   <?php require 'includes/footer.php'?> 
