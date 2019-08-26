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
        What was your grade?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php 
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good";
                break;
            case "C":
                echo "You could do better";
                break;
            case "D":
                echo "You need to study harder!";
                break;
            case "F":
                echo "You failed";
                break;
            default:
                echo "You must enter A, B, C, D, or F";
                break;
        }
    ?>

</body>
</html>