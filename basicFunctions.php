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
        function sayHi(){
            echo "Hello User";
        };
        sayHi();

        echo "<br>";
        echo "<br>";

        function sayHi2($name){
            echo "Hello $name";
        };
        sayHi2("Brandon");

        echo "<br>";
        echo "<br>";

        function sayHi3($name){
            echo "Hello $name <br>";
        };
        sayHi3("Brandon");
        sayHi3("Joe");
        sayHi3("Carolyn");

        echo "<br>";
        echo "<br>";

        function sayHi4($name, $age){
            echo "Hello $name, you are $age <br>";
        };
        sayHi4("Brandon", 37);
        sayHi4("Joe", 36);
        sayHi4("Carolyn", 43);

        echo "<br>";
        echo "<br>";
    ?>

</body>
</html>