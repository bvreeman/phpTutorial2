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
        }

        $book1 = new Book;
        $book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 400;

        echo "Title: $book1->title <br>";
        echo "Author: $book1->author <br>";
        echo "Number of Pages: $book1->pages <br>";
        
        echo "<br>";
        echo "<br>";

        $book2 = new Book;
        $book2->title = "Lord of the Rings";
        $book2->author = "Tolkien";
        $book2->pages = 700;

        echo "Title: $book2->title <br>";
        echo "Author: $book2->author <br>";
        echo "Number of Pages: $book2->pages <br>";

    ?>

</body>
</html>