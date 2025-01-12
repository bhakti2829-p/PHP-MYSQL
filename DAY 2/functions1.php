<html>
    <body>
        <?php
        //Functions
        //Without parameters
        function firstFunction(){
            echo "Hello World!";
        }
        firstFunction();

        //With Parameter function
        function greet ($name){
            echo"<br> Hello". $name;
        }
        defaultParameter();
        function defaultParameter ($name = "Guest"){
            echo"<br> Hello". $name;
        }
        defaultParameter();
        defaultParameter("Default Parameter!");

        //Function that returns a value 
        function multiply($a,$b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo "<br>". $result;
        
    
        //Function by value example
        function addTEN($num){
            $num +=10;
            echo"<br> Function Value ". $num;
        }
        $x=5;
        addTen($x);
        echo"<br> Original Value :".$x;
        echo"<br>";


       // Function by Refrence example
       function addTenByRefer(&$num){
        $num +=10;
        echo"<br> Function Value ". $num;
    }
    $y=5;
    addTenByRefer($y);
    echo"<br> Original Value :".$y;
    

    // Early Returning the values in function (conditional)
    function checkEvenOdd($num){
        if ($num% 2 ==0){
        return "Even";
    } 
    return "Odd";
}


echo"<br>";
echo checkEvenOdd(18);
echo"<br>";
echo checkEvenOdd(15);
