<html>
    <body>
        <?php
        //This is single line comment
        //echo "Hello world";

        echo "Comment Example!";
        echo "This is a comment name";

        $name
        = "MY NAME IS PUNIT";        //string
        $age = 18;                       //Integer
        $time = 14.46;                   //Float
        $class = true;                   //Boolean

        //compound types
        $student_arr = array("Vedant", "Punit", "Rehaan"); //Array
        
        class student{   //class
            public $marks;
        }
        $stud = new Student();
        $stud->marks = 90;

        //speacial Types
        $null_var = null;


        echo "<br> string : " , $name;
        echo "<br> Integer : " , $age;
        echo "<br> float : " , $time;
        echo "<br> Boolean : " , $class;
        echo "<br> Array : " , $student_arr[2];

        //echo "Object : ", $stud
        echo "Null :",$null_var;

        /* This is multiline comment
        Developed for php session */
        ++
        ?>
        </body>
        </html>
            