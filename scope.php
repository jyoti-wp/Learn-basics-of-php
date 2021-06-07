<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scope in php</title>
</head>

<body>
    <!-- when we say scope. there are 2 type of scopes
local scope and global scope. -->

    <!-- when we say scope we mean the enviroment in which that specific 
scope is available or accessable. so if we have a gloabal variable we can
access it inside of the variable and even outsied. Where local scope can be 
accessed only on the inside of the variable. Let's see how -->

    <?php
    $x = 'Outside';   // Global
    function variable()
    {
        global $x; //Use global keyword
        $x = 'Inside';  // Local
    }

    echo $x . "<br>";

    variable();

    echo $x;

    ?>
</body>

</html>