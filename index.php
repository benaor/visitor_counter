<?php 

    // 'a+' for create, read and edit. 
    // else i can use r+ if the file already exist, for read et edit.
    // 'r' and 'a' is possible for just read the file (and create in the case of 'a' )
    $file = fopen('visitor_counter.txt', 'r+');

    //Read the file
    $visitor = fgets($file);

    //move the cursor to the start of file 
    fseek($file, 0);
    $visitor += 1; 

    //Write the new visitor number in the file
    fputs($file, $visitor);

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