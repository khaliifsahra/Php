<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //q6
    
    $num1 = 8;
    $num2 = 12;
    $lcm = ($num1 > $num2) ? $num1 : $num2;
    while (true) {
        if ($lcm % $num1 == 0 && $lcm % $num2 == 0) {
            break;
        }
        $lcm++;
    }
    echo "The LCM of $num1 and $num2 is: $lcm"; ?>
</body>

</html>