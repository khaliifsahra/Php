<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    //q2
    
    $num = 20;

    if ($num % 3 == 0 && $num % 5 == 0) {
        echo "This number is divisible by both 3 and 5";
    } elseif ($num % 3 == 0) {
        echo "This number is divisible by 3";
    } elseif ($num % 5 == 0) {
        echo "This number is divisible by 5";
    } else {
        echo "This number is not divisible by 3 or 5";
    } ?>
</body>

</html>