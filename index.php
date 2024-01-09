<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /Bootstrap cdn  -->
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-5 text-center">PHP Hotel</h1>

        <!-- form con checkbox parcheggio  -->
        <form action="" class="mb-4">
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="parking_filter" id="parking_filter">
                <label class="form-check-label" for="parking_filter">Mostra solo gli hotel con parcheggio</label>
                </div>
            <button type="submit" class="btn btn-primary">Applica filtro</button>
        </form>
        <!-- /form con checkbox parcheggio  -->

        <table class="table table-bordered">
            <thead>
                <tr>
                    <?php
                        foreach ($hotels[0] as $key => $value) {
                            echo "<th scope='col' class='text-center bg-primary text-white'>" . ucfirst(str_replace("_", " ", $key)) . "</th>";
                        }
                    ?>
                </tr>
            </thead>

            <tbody>

                <?php 
                foreach ($hotels as $index => $hotel) {

                    if (isset($_GET['parking_filter']) && !$hotel['parking']) {
                    } else {
                        echo "<tr>";
                        foreach ($hotel as $key => $value) {
                            if ($key === "parking") {
                                $value = $value ? "SI" : "NO";
                            }
                
                            echo "<td class='text-center'>" . $value . "</td>";
                        }
                        echo "</tr>";
                    }
                }
                ?>
            
            </tbody>
        </table>
    </div>
</body>
</html>