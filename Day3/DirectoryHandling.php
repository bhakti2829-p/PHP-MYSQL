<html>
    <body>
        <?php

//Create a Directory
if(!is_dir("phpday3_Directory")){
    mkdir("phpday3_Directory");
    echo"Directory Created";
}
else{
    echo"Directory already exists !";
}

//Check if the directory exist 
if(is_dir("phpday3_Directory")){
    echo"Directory Exist";
}
    else{
    echo"Directory does not Exist!";
echo "<br>";
//List the file insude the floder
$files =scandir("phpday3_directory")
foreach($files as $files ){
    echo $file ."<br>;
}
    echo"<br>";
    //Change the directory
    echo"Current directory :" . getcwd();
    chdir("phpday3_Directory");
    echo "<br> New Current Directory:". getcwd();
    echo"<br>;
     //delete the files insude the directory




}


