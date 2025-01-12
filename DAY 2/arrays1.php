<html>
    <body>
        <?php
        //Arrays indexed

        $fruits =["Mango","Apple","Strawbeery","Cheery",];
        echo "Selected fuit:". $fruits[1];

        foreach($fruits as $fruit){
            echo"<br> fruit:".$fruit;
        }

        //Associative  Array
        echo"<br>";
        $ages =["john"=> 25, "Raj"=>18, "Alice"=>22];
        echo"<br> Selected Age :".$ages["Alice"];
        foreach($ages as $name =>$age){
            echo"<br>" . $name . "is" . $age ." years old.";
        }

        //Multi-dimension Array
        echo"<br>";
        $students = [
            ["john", 25, true],
            ["Raj", 18, true],
            ["Alice", 22, false],
        ];
 
        echo "<br> Student 1 is present in the class :" . $students[0][2];
 


    //Array Manipulation

    $classroom = ["Stuart"," Ben","rick"];

    //Adding element
    echo "<br>";
    $classroom[]= "Alen";
    array_push($classroom, "Xavier");
    foreach($classroom as $student){
        echo"<br> Student :".  $student;
    }
    // Updating
    echo "<br>";
    $classroom[2]= "BHAKTI";
    foreach($classroom as $student){
        echo"<br> Student :".  $student;
    }
    
    //Counting Elements
    echo "<br>";
    echo "Number of elements in the array are :". Count($classroom);

    //Deleting Elements
    unset($classroom[1]);
    echo"<br";
    print_r($classroom);

    //re-Indexing Elements
    $classroom = array_values($classroom);
    echo "<br";
    print_r($classroom);




?>
</body>
</html>










    