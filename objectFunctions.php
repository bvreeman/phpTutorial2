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
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors(){
                if($this->gpa >= 3.5){
                    return "Yes";
                }
                return "No";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);

        echo "Student's Name: $student1->name <br>";
        echo "Major: $student1->major <br>";
        echo "GPA: $student1->gpa <br>";
        echo "Does this student have honors: ";
        echo $student1->hasHonors();
        
        echo "<br>";
        echo "<br>";

        echo "Student's Name: $student2->name <br>";
        echo "Major: $student2->major <br>";
        echo "GPA: $student2->gpa <br>";
        echo "Does this student have honors: ";
        echo $student2->hasHonors();

    ?>

</body>
</html>