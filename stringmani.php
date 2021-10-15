<?php 
    $title = "String Manipulation";
    include 'includes/header.php'?>

    <h1> <?php echo $title ?> </h1>
    <?php 

        // Concatenation of strings
        $phrase1 = "Students";
        $phrase2 = "Lecturers";
        $name = "lon - nix";

        echo $phrase1. " and " . $phrase2;
        echo '</br>';
        // String Transformation
        echo '<hr/>';
        echo 'Uppercase first letter: '.ucfirst($name).'</br>';
        echo 'Uppercase each Word: '.ucwords($name).'</br>';
        echo 'Upper case: '.strtoupper($name).'</br>';
        echo 'Lower case: '.strtolower("LON-NIX").'<br/>';
        echo '<hr/>';

        //Repeat String
        echo 'Repeat String: '.str_repeat('a ',5).'<br/>';
        echo 'Repeat String - Nested Function: '.str_repeat(strtoupper('a '),5).'</br>';
        //Return all characters from the 4th - 9th position
        echo 'Get a Sub String: '.substr($name,4, 9).'</br>';

        //Return position of character 'x'
        echo 'Get a position of char: '.strpos($name,'x').'</br>';

        //Finding a specific character and start from the position of that character
        echo 'Find Character "L": '.strchr($name,'l').'</br>';
        echo 'Find Character "N": '.strchr($name,'n').'</br>';
        echo 'Find Character "I": '.strchr($name,'i').'</br>';
        echo 'Find Character "O": '.strchr($name,'o').'</br>';

        //Finding a specific character and start from the position of that character
        echo 'Find length of a String: '.strlen($name).'</br>';

        //Triming a String

        echo 'WITHOUT Trim '."I"." L O V E "."U".'</br>';
        echo 'Trim spaces on both sides: '."I".trim(" L O V E ")."U".'</br>';
        echo 'Trim spaces on left: '."I".ltrim(" L O V E ")."U".'</br>';
        echo 'Trim spaces on right: '."I".rtrim(" L O V E ")."U".'</br>';
        echo 'Replace a String with another : '.str_replace('lon','Lonz', $name).'</br>';

    ?>

    <?php require 'includes/footer.php'?>
