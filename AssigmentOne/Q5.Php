<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    //Q5 reverse
    
    $num = 12345;
    $reverse = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $reverse = ($reverse * 10) + $digit;
        $num = (int) ($num / 10);
    }
    echo "The reverse number is: $reverse"; ?>
</body>

</html>