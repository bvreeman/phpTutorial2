<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Tutorial</title>
</head>
<body>

    <form action="site.php" method='get'>
        <input type="number" name='num1'>
        <input type="number" name='num2'>
        <input type="submit" />
    </form>

    Answer: <?php echo $_GET["num1"] + $_GET["num2"]; ?>

</body>
</html>