<?php 
    $title = "Array";
    include 'includes/header.php'?>
    
    <h1> <?php echo $title ?>  </h1>
    
    <?php 

        // variable declartion  
        $numb = 0;

        // array declartion  
        // Sorting only one datatype
        $numbArray =  array(1,2,3,4,5,6,7,8,9,10);

        echo $numbArray[5];

        echo "<p> Position 8 in the array: $numbArray[7] </p>";

        echo '<p> Size of array: '.count($numbArray).'</p>';

        // For Loop to traverse the array
        
        for ($count=0; $count < count($numbArray); $count++)
        {
            echo "<p> Value array: $numbArray[$count] </p>";
        }
    
    ?>

<?php require 'includes/footer.php'?>
