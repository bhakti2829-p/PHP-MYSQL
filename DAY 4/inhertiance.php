<html>
    <body>
        <?php
        //inhertiance
        class Animal{

        
            public function makesound(){
                return "some genric sound";
            }
        }
        class Dog extends Animal{
            public function makesound(){
                return "bark";     
            }       
        }
        class Cat extends Animal{
            public function makesound(){
                return "meow";
            }
        }
        $dog =new dog();
        echo $dog->makesound();
        $cat =new cat();
        echo $cat->makesound();
        ?>
    </body>
</html>