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
        class Chef {
            function makeChicken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }
        
        // using extends makes it so the ItalianChef has all the code from the Chef class
        
        class ItalianChef extends Chef {
            function makePasta() {
                echo "The chef makes pasta";
            }
            // This overrides the makeSpecialDish inherited from Chef
            function makeSpecialDish() {
                echo "The chef makes pizza";
            }
        }

        $chef = new Chef();
        $chef->makeSpecialDish();

        echo "<br>";
        echo "<br>";

        $italianChef = new ItalianChef();
        $italianChef->makeSpecialDish();

    ?>

</body>
</html>