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
        echo 10 % 3;

        echo "<br />";

        echo 4 + 5 * 10;

        echo "<br />";

        $num = 10;
        $num++;
        echo $num;

        echo "<br />";

        $num = 10;
        $num--;
        echo $num;

        echo "<br />";

        echo "Using +=, -=, *=, and /= <br />";
        $num = 10;
        $num += 25;
        echo $num;
        
        echo "<br />";
        echo "Absolute Value <br />";
        echo abs(-100);

        echo "<br />";

        echo "To the power of <br />";
        echo pow(2, 4);
        
        echo "<br />";

        echo "Square Root <br />";
        echo sqrt(144);
        
        echo "<br />";

        echo "Find larger number <br />";
        echo max(2, 10);
        
        echo "<br />";

        echo "Find smaller number <br />";
        echo min(2, 10);

        echo "<br />";

        echo "Rounding <br />";
        echo round (3.2);
        
        echo "<br />";

        echo "Always rounding up <br />";
        echo ceil(3.3);
                
        echo "<br />";

        echo "Always rounding down <br />";
        echo floor(3.7);
    ?>

</body>
</html>