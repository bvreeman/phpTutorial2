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
        $title = "My First Post";
        $author = "Brandon";
        $wordCount = 400;

        include "article-header.php"; 

        echo "<br>";
        echo "<br>";

        include "useful-tools.php";

        sayHi("Brandon");
        echo " <br> $feetInMile";
    ?>

</body>
</html>