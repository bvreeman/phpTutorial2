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
        echo "Find first element in array <br>";
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        echo $friends[0];

        echo "<br>";
        echo "<br>";

        echo "Change second element in array <br>";
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[1] = 400;
        echo $friends[1];

        echo "<br>";
        echo "<br>";

        echo "Add item to array <br>";
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[4] = "Bob";
        echo $friends[4];

        echo "<br>";
        echo "<br>";

        echo "Count items in array <br>";
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $friends[4] = "Bob";
        echo count($friends);
    ?>

</body>
</html>