<html>
    <body>
        <?php
        //File Handling Operations

        //Create a new file
        $file=fopen("Student.txt","w");
        fclose($file);
        echo"File has been created";

        //Write in a new file
        fwrite($file, "Hello student file !! \n This is test file")
        echo"<br> text has been inserted";
        fclose($file);

    
        // write a filr
    $file_read= fopen("student.txt","r");
    while(!feof($file_read)){
          echo fgets($file_read)."<br>";
}
          fclose($file_read);

          //deleting a file 
          if(file_exists("Student.txt")){
            unlink("Student.txt");
          
          echo"<br><br> FIle has been deleted!!";
          }
          else{
          echo"<br><br> File not found";
}
          ?>

          </body>
          </html>