<?php 
    $title = "While/Do While Loop";
    include 'includes/header.php'?>

    <h1> <?php echo $title ?> </h1>

    <h2>WHILE LOOP</h2>

    <?php 

        // While Loop 
        $grade = 0;
        /*
        Infinite Loop
        while ($grade<10)
        {
            echo '<p>Life Is Good!</p>';
        }*/

        while ($grade<10)
        {
            echo "<p> Grade is: $grade</p>";
            $grade++;
        }
        echo "<p> EXIT LOOP!</p>";  
    
    ?>

    <h2>DO-WHILE LOOP</h2>
    <?php 
         //Do While Loop (post condition loop)
         $grade =0;
         do{
             echo "<p>Grade is: $grade</p>";
             $grade++;
         }while($grade<10);
    
    ?>
    <?php require 'includes/footer.php'?>
