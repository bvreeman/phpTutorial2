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
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the Rings", "Tolkien", 700);


        echo "Title: $book1->title <br>";
        echo "Author: $book1->author <br>";
        echo "Number of Pages: $book1->pages <br>";
        
        echo "<br>";
        echo "<br>";

        echo "Title: $book2->title <br>";
        echo "Author: $book2->author <br>";
        echo "Number of Pages: $book2->pages <br>";

    ?>

</body>
</html>