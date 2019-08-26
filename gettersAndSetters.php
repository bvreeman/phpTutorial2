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
        class Movie {
            // var and public are mostly the same, couple differences;
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || 
                $rating == "PG-13" || $rating == "R" ||
                $rating == "NR"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }


        $avengers = new Movie("Avengers", "PG-13");
        // G, PG, PG-13, R, NR

        echo "Movie Title: $avengers->title <br>";
        echo "Rating: ";
        echo $avengers->getRating();

        
        echo "<br>";
        echo "<br>";

    ?>

</body>
</html>