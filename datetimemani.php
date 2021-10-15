<?php 
    $title = "Date & Time Manipulation";
    include 'includes/header.php'?>
    
    <h1> <?php echo $title ?> </h1>
    <?php 
        // Concatenation of strings
        echo "<p> Today's Date: ".getdate()['mday'].
        '/'.getdate()['mon'].'/'.getdate()['year']."</p>";

        echo 'Time: '.time();

        print '<p>'.'Today is: '.date("d/m/y G.i:s", time()).'</p>';

        print '<p>'.'Today is: '.date("j F Y, \a\\t g.i a", time()).'</p>';
    ?>

<?php require 'includes/footer.php'?>
