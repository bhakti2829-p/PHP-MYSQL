<html>
    <body>
        <?php
        // classes and object
        class Car{
            public $brand;  //property of the Car
            public $color;  //property of the Car
            //private
            //protected            
            public function StartEngine(){
                return "This engine was start";
            }
            }
 //create an object
 $Car = new Car();
 $Car->brand ="Benzi";
 $Car->color ="Black";
 echo "Car brand ". $Car->brand ."<br>";
 echo $Car->StartEngine();
 ?>
</body>
</html>
            
        
            

                  
        
        

       