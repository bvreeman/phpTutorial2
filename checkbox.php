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
        Apples: <input type="checkbox" name='fruits[]' value='apples'><br>
        Oranges: <input type="checkbox" name='fruits[]' value='oranges'><br>
        Bananas: <input type="checkbox" name='fruits[]' value='bananas'><br>

        <input type="submit">
    </form>

    <?php 
        echo "Your first choice was ";
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>

</body>
</html>