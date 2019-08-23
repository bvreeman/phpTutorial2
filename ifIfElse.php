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
        $isMale = false;
        if ($isMale){
            echo "You are male";
        } else {
            echo "You are not male";
        }

        echo "<br>";
        echo "<br>";

        $isMale = true;
        $isTall = false;
        if ($isMale && $isTall){
            echo "You are male and you are tall";
        } else {
            echo "You are either not male or not tall";
        }

        echo "<br>";
        echo "<br>";

        $isMale = false;
        $isTall = false;
        if ($isMale || $isTall){
            echo "You are either male or you are tall";
        } else {
            echo "You are neither male nor tall";
        }

        echo "<br>";
        echo "<br>";

        $isMale = false;
        $isTall = false;
        if ($isMale && $isTall){
            echo "You are a tall male";
        } elseif ($isMale && !$isTall){
            echo "You are a male, but you are not tall";
        } elseif (!$isMale && $isTall){
            echo "You are not male, but you are tall";
        } else {
            echo "You are not male, and you are not tall";
        }
    ?>

</body>
</html>