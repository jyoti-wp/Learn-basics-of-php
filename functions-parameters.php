<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions with parameters</title>
</head>

<body>
    <!-- we already know how to define a function. Now we will learn how -->
    <!-- to pass parameters -->

    <!-- we pass is a parameter inside of the paranthese
and we pass the argument when we call the function -->

    <?php
    function greet($super)
    {
        echo $super;
    }

    greet('<h1>Man Of Steel</h1>');


    // lets check another example 

    function calculate($name, $age)
    {
        echo "My name is $name and i am $age years old. <br>";
    }

    calculate("Jyoti", 28);
    calculate("Priya", 27);

    // so you can call the function as may time as you please and 
    // pass different value each time
    // 
    ?>
</body>

</html>