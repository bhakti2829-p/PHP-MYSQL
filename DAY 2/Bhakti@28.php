<html>
    <body>
        <?php
        //Control Structures

        //Conditional Statements  if and if---else
        $name ="bhakti";

        if ($name=="vidhi"){
            echo $name." Name is correct";
        }
        else{
            echo $name." Name is not correct";
        }





        //Conditional Statement if and if---else
        $marks = 61;

         if($marks >= 80){
            echo "<br> You got grade A";
        }
        elseif($marks >= 60){
            echo "<br> You got grade B";
        }
        elseif($marks >= 40){
            echo "<br> You got grade C";
        }
        else{
            echo"<br> You got grade D";
        }
        //Conditional control switch

        $day ="Sunday";
        switch($day){
            case "Sunday":
                echo"Its Sunday !!!";
                break;
                case "Monday":
                    echo"Its Monday !!!";
                break;
                case "Tuesday":
                    echo"Its Tuesday !!!";
                break;
                case "Wednesday":
                    echo"Its Wednesday !!!";
                break;
                case "Thursday":
                    echo"Its Thursday !!!";
                break;
            default:
                     echo "No matchimg day !! ";
                
        }
        //Iteratic Control statement while loop
        echo "<br>";


        $count = 1;
        while($count <=5){
            echo "<br> While  count is ". $count;
            $count++;
            } 

         //Iteratic Control statement  loop
        echo "<br>";
        for($i=1; $i<=3; $i++){
            echo "<br>for loop number:". $i;

        }
        // Iteratic Control Statement foreach loop
        echo"<br>";
        $array= ["Red","Green","Pink","Blue"];
        foreach($array as $color){
            echo"<br> color :". $color;
    }
    

        ?>
        </body>
        </html>
