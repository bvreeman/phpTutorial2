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
        echo max(3, 6);

        echo "<br>";
        echo "<br>";

        function getMax($num1, $num2){
            if($num1 < $num2){
                return $num2;
            } else {
                return $num1;
            }
        }

        echo getMax(4231, 91);

        echo "<br>";
        echo "<br>";

        function getMax2($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            } else if($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        };

        echo getMax2(4231, 900001, 40009);

    ?>

</body>
</html>