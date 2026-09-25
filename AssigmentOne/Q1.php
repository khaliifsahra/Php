<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Q1
    $n1 = 10;
    $n2 = 20;
    $n3 = 30;
    //greter
    if ($n1 >= $n2 && $n1 >= $n3) {
        $greatest = $n1;
    } elseif ($n2 >= $n1 && $n2 >= $n3) {
        $greatest = $n2;
    } else {
        $greatest = $n3;
    }
    //small
    if ($n1 <= $n2 && $n1 <= $n3) {
        $smallest = $n1;
    } elseif ($n2 <= $n1 && $n2 <= $n3) {
        $smallest = $n2;
    } else {
        $smallest = $n3;
    }

    echo "The greatest number is $greatest <br>";
    echo "The smallest number is $smallest";

    ?>
</body>

</html>