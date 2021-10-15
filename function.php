<?php 
    $title = "Function";
    include 'includes/header.php'?>

    <h1> <?php echo $title ?> </h1>
    <?php 
        // Defining a function//
        function dateTime(){
            print '<p>'."Today's Date: ".date("j F Y \\T\\i\\m\\e: \ g.i a", time()).'</p>';
        }

        //Calling a function//
        dateTime();

        //Function with parameter, calling by value/
        function addFunction($num1, $num2){
            print '<p>'."Sum of $num1 and $num2 = ".$num1 + $num2.'</p>';
        }

        //Passing by refernce
        function changeNum(&$num){
            $num += 100;
            echo $num. '<br/>';
            //$num= $num + 100;
        }

        //returning a value using a function
        function returnProduct($num1, $num2){
           // $prod = $num1 * $num2;
            return $num1 * $num2;
        }


        //Calling addfunction()//
        $returnedValue = returnProduct(88, 4);
        $num = 2020;
        addFunction(21, 24);
        addFunction(21, $num);
        addFunction("8", "24");
        changeNum($num);
        echo $returnedValue. '<br/>';
        
    ?>
<?php require 'includes/footer.php'?>
