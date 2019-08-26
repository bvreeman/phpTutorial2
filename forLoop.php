<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>

    <?php 
        echo "While Loop <br>";
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index ++;
        };

        echo "<br>";
        echo "<br>";

        echo "For Loop <br>";
        for($i = 1; $i <= 5; $i++){
            echo "$i <br>";
        }
        
        echo "<br>";
        echo "<br>";

        echo "Printing out all items in Array using For Loops <br>";
        $luckyNumbers =array(4, 8, 14, 16, 23, 42);
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
        }
    ?>

</body>
</html>