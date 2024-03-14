<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $txt = 'Hm Hello World Hmmmmmm <br>'; 
     echo "$txt"; 
     echo strtoupper($txt); 
     echo phpversion(); 
     var_dump($txt); 
     print "Hello World Print $txt" ;

     function HelloPrint(){
        print "This is a function run" ;
     }

     HelloPrint()
     ?>
</body>
</html>