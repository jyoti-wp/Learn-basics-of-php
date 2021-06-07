<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions file</title>
</head>

<body>
    <!-- fucntions let us use a block of code 
over and over so that we an use those codes 
again in different files without having to write them again-->


    <!-- The main motive of creating funtion is so that we can use it on multiple different pages  -->
    <?php
    function say_something()
    {
        echo "Say Something! Nothing?";
    }

    // now lets call the function 
    // make sure to call the function outised of the function or else it wont work 

    say_something();
    ?>

    <!-- you can also call a function inside of a function  -->
</body>

</html>