
<html>
    <body>
        <?php
        //Cookies

        session_start();
        $_SESSION["username"] ="BHAKTI";
        $_SESSION["role"] ="HACKER";
    
    echo "Session has been created ! <br>";

// ACEESING SESSION VARIABLES 
if(isset($_SESSION["username"])){
    echo "Welcome". $_SESSION["username"];
}
else{
    echo "no active session found !";
}
   // cancelling the session
   session_unset();
   session_destroy();
   echo "<br> Session has been  terminated !<br>";

   if(isset($_SESSION["username"])){
    echo "Welcome". $_SESSION["username"];
   }
   else{
    echo " no active session found !";
   }

    ?>
</body>
</html>