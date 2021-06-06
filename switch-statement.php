<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch statement</title>
</head>

<body>
    <?php
    $number = 34;

    switch ($number) {

        case 43:
            echo "it is 34";
            break;
        case 29:
            echo "it is 34";
            break;
        case 14:
            echo "it is 34";
            break;

            // if all the cases are not true  we write default

        default:
            echo "we could not match anything";
    }
    ?>


    <!-- make sure to add break in between for the statement to break out once its found the answer -->
</body>

</html>