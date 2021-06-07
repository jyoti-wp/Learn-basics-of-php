<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each Loop</title>
</head>

<body>
    <!-- for each loop only works with an array  -->
    <!-- lets see how  -->

    <?php
    $numbers = [345, 8756, 634, 3473, 84759, 658734];
    foreach ($numbers as $number) {
        echo $number . "<br>";
    }

    // foreach loop assigned a number vale to each array 
    // foreach loop will find out the value for us everytime its run. where in while loop we have to know where exactly the value is 
    ?>
</body>

</html>