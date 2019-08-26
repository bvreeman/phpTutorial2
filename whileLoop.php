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
        $index = 1;
        while($index <= 10){
            echo "$index <br>";
            $index ++;
        };

        echo "<br>";
        echo "<br>";

        // This is a do while, its a while loop, but backwards
        // Runs the loop body first, so even though 6 is greater than 5, it runs once
        $index = 6;
        do {
            echo "$index <br>";
            $index++;
        } while($index <= 5);
    ?>

</body>
</html>