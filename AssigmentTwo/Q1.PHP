<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $Numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

    // Print all elements
    echo "All elements:<br>";

    for ($i = 0; $i < count($Numbers); $i++) {
        echo $Numbers[$i], " ";
    }
    echo "<br><br>";

    //total elements
    $Total = 0;
    for ($i = 0; $i < count($Numbers); $i++) {
        $Total = $Total + $Numbers[$i];
    }
    echo "Total = " . $Total . "<br>";

    $evenTotal = 0;
    for ($i = 0; $i < count($Numbers); $i++) {
        if ($Numbers[$i] % 2 == 0) {
            $evenTotal = $evenTotal + $Numbers[$i];
        }
    }
    echo "Total of even numbers = " . $evenTotal . "<br>";



    //total odd 
    

    $oddTotal = 0;
    for ($i = 0; $i < count($Numbers); $i++) {
        if ($Numbers[$i] % 2 != 0) {
            $oddTotal = $oddTotal + $Numbers[$i];
        }
    }
    echo "Total of odd numbers = " . $oddTotal . "<br>";

    // Find minimum
    $min = $Numbers[0];

    for ($i = 1; $i < count($Numbers); $i++) {
        if ($Numbers[$i] < $min) {
            $min = $Numbers[$i];
        }
    }

    echo "Minimum = " . $min . "<br>";
    echo "Minimum positions: ";

    for ($i = 0; $i < count($Numbers); $i++) {
        if ($Numbers[$i] == $min) {
            echo $i . " ";
        }
    }

    echo "<br>";
    $max = $Numbers[0];

    for ($i = 1; $i < count($Numbers); $i++) {
        if ($Numbers[$i] > $max) {
            $max = $Numbers[$i];
        }
    }

    echo "Maxmum = " . $max . "<br>";
    echo "Maxmum positions: ";

    for ($i = 0; $i < count($Numbers); $i++) {
        if ($Numbers[$i] == $max) {
            echo $i . "";
        }
    }
    ?>
</body>

</html>