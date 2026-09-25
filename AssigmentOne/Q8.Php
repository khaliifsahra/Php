<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //q8
    echo "<table border='1' cellpadding='10'>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 12; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>"; ?>
</body>

</html>