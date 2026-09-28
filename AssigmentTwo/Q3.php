<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

        <?php
        //q3 associative array of two dimensions where row names are CA202, CA207, and CA202,
    
        $Stusents = array(

            "CA202" => array(
                "Name" => "Mohamed Ahmed Ali",
                "Phone" => "0648440403",
                "Address" => "Laba Dhagax, Wardhiigley"

            ),

            "CA207" => array(
                "Name" => "Ahmed Abdi Jama",
                "Phone" => "0647223201",
                "Address" => "Taleex, Hodan"

            ),
            "CA202" => array(
                "Name" => "Amina Nur Adan",
                "Phone" => "0646990276",
                "Address" => "Macmacaanka, Dharkeynley"
            )
        );

        echo "<table border='1' cellpadding='10'>  ";

        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Phone</th>";
        echo "<th>Address</th>";
        echo "</tr>";

        foreach ($Stusents as $id => $student) {
            echo "<tr>";

            echo "<td>" . $id . "</td>";
            echo "<td>" . $student["Name"] . "</td>";
            echo "<td>" . $student["Phone"] . "</td>";
            echo "<td>" . $student["Address"] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        ?>
</body>

</html>
