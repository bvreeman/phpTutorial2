<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
        $phrase = "Giraffe Academy";
        $phrase[0]="B";
        echo $phrase;
        
        echo "<br />";

        $phrase = "Giraffe Academy";
        echo str_replace("Giraffe", "Panda", $phrase);

        echo "<br />";

        $phrase = "Giraffe Academy";
        echo substr($phrase, 8);

        echo "<br />";

        $phrase = "Giraffe Academy";
        echo substr($phrase, 8, 3)
    ?>

</body>
</html>