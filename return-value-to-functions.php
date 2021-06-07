<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return value to functions</title>
</head>

<body>

    <!-- you can pass multiple values and reuse the function
without having to echo the value inside of the function -->
    <?php
    function value($number1, $number2)
    {
        $sum = $number1 + $number2;
        return $sum;
    }
    $result =  value(28, 47);
    $result = value(375, $result);
    echo $result;

    ?>
</body>

</html>