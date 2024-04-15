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



//l'ho passato al body

// foreach ($hotels as $hotel) {

//     echo $hotel['name'] . "Descrizione :" . $hotel['description'] . "vote" . $hotel['vote'] . "Distance to center" . $hotel['distance_to_center'] . "<h2>Hotels</h2>" . "<br>";
// }




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>php-hotel</title>
</head>

<body>


    <!-- cicclo all'interno del body -->
    <?php foreach ($hotels as $hotel) :   ?>


        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">

                        <p><?php echo  $hotel['name']   ?> </p>
                        <p><?php echo  $hotel['description'] ?> </p>
                        <p><?php echo  $hotel['vote'] . "/5" ?> </p>
                        <p><?php echo  $hotel['distance_to_center'] ?> </p>

                    </div>
                </div>
            </div>

        </div>



    <?php endforeach; ?>
    <!-- chiusura ciclo foreach -->


</body>

</html>