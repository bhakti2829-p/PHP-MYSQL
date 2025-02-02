<html>
    <body>
        <?php
        //Cookies

        //set a cookie
        $cookieName ='langPreference';
        $cookieValue ='French';
        $cookieExpire =time() +(180);
         
        setcookie($cookieName, $cookieValue, $cookieExpire, "/");

         echo "Cookie has been set!";
        // accesing the cookie
        if(isset($_COOKIE[$cookieName])){
            echo "<br> Your language perference is : " .$_COOKIE[$cookieName];
    
        }
        else{
            echo " <br> Cookie is not set !";

        }

        // delecting cookie or block the cookie
        setcookie($cookieName, $cookieValue, time()-  (30) ,"/");
       echo "<br> Cookie has been deleted !";
       ?>
    </body>
</html>
              
