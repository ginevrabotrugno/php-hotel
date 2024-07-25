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

    // inizializzo array che stampa hotel con parcheggio
    $filtered_hotels = [];

    $vote = isset($_GET['inlineRadioOptions']) ? $_GET['inlineRadioOptions'] : 0;
    // var_dump($vote);

    // var_dump($_GET);

    if (!isset($_GET['is_parking'])) {
        // se il form invia parking eseguo il filtro
        foreach ($hotels as $hotel) {
            if ($hotel['vote'] >= $vote) {
                $filtered_hotels[] = $hotel;
            }
            // // se parking è true aggiungo l'hotel all'array
            // if($hotel['parking']){
            //     $filtered_hotels[] = $hotel;
            // }
        }
        // se non invia stampo tutti gli hotel
    } else {
        foreach($hotels as $hotel){
            if ($hotel['parking'] && $hotel['vote'] >= $vote) {
                $filtered_hotels[] = $hotel;
            }
        }
    }

   
    foreach ($hotels as $hotel) {
        $distance =  $hotel['distance_to_center'] . ' Km';
        // var_dump($distance);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>PHP Hotel</h1>
    <section class="container">

        <form action="index.php" method= "GET">

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="is_parking" id="inlineCheckbox1" <? ?>>
                <label class="form-check-label" for="inlineCheckbox1">Parking</label>
            </div>

            <span> Vote(min):  </span>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2">
                <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="3" >
                <label class="form-check-label" for="inlineRadio3">3 </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="4" >
                <label class="form-check-label" for="inlineRadio4">4 </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="5" >
                <label class="form-check-label" for="inlineRadio5">5 </label>
            </div>

            <button type="submit" class="btn btn-primary">Filter</button>
            <button type="reset" class="btn btn-secondary">Reset</button>

        </form>

        <table class="table text-center">
            <thead>
                <tr class="text-uppercase">
                    <?php
                        // Usare il primo hotel per ottenere le chiavi
                        $firstHotel = $hotels[0];
                        foreach ($firstHotel as $key => $value) {
                            echo "<th>" . $key . "</th>";
                        }
                    ?>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <?php foreach ($filtered_hotels as $hotel): ?>
                <tr>
                    <?php foreach($hotel as $key => $value): ?>
                        <td> 
                            <?php 

                                if ($key == 'parking') {
                                    echo $value ? 'Sì' : 'No';
                                } elseif ($key == 'distance_to_center') {
                                    echo $value = $distance;
                                } else {
                                    echo $value;
                                }
                               
                           ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>        
        </table>

    </section>
</body>
</html>