<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

//Q3
//2 to 20 odd
    for ($i = 2; $i <= 20; $i++) {

        if ($i % 2 != 0) {
            echo "$i <br>";
        }

    }
    // 35 t0 7 event
    
    for ($i = 35; $i >= 7; $i--) {

        if ($i % 2 == 0) {
            echo "$i <br>";
        }

    }

    ?>

</body>

</html>