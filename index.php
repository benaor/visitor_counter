<?php 

    // 'a+' for create, read and edit. 
    // else i can use r+ if the file already exist, for read et edit.
    // 'r' and 'a' is possible for just read the file (and create in the case of 'a' )
    $file = fopen('visitor_counter.txt', 'r+');

    //Read the file
    $visitor = fgets($file);

    //close the file
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> </h1>
</body>
</html>