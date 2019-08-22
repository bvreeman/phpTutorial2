<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>

    <form action="site.php" method="post">
        Student's Name: <input type="text" name="student">
        <input type="submit">
    </form>

    <?php 
        echo "Key Value Pair associative array <br>";
        $grades = array("Jim"=>"A+", "Bob"=>"B", "Frank"=>"A-");
        echo $grades["Jim"];

        echo "<br>";
        echo "<br>";

        echo "Changing Value in Key Value Pair associative array <br>";
        $grades = array("Jim"=>"A+", "Bob"=>"B", "Frank"=>"A-");
        $grades["Jim"] = "F";
        echo $grades["Jim"];
    
        echo "<br>";
        echo "<br>";

        $grades = array("Jim"=>"A+", "Bob"=>"B", "Frank"=>"A-");
        echo $grades[$_POST["student"]]
    ?>

</body>
</html>