<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Import bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Php Hotel</title>
</head>

<body>
    <main>

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
        <div class="container">
            <form action="control.php" method="get">
                <label for="input_text">Hotels with parking</label>
                <input type="checkbox" name="posto" value="yes"></input>
                <label for="censored-word">Hotel without parking</label>
                <input type="checkbox" name="posto" value="no">
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>List Hotel disponibili</h1>
                </div>
            </div>
            <table class="table table-dark">

                <?php
                echo " <thead>
                            <tr>
                                <th scope='col'>Name</th>
                                <th scope='col'>Description</th>
                                <th scope='col'>Parking</th>
                                <th scope='col'>Vote</th>
                                <th scope='col'>Distance to center</th>
                            </tr>
                    </thead>";


                foreach ($hotels as $hotel) {
                    echo "<tr>";
                    echo "<td>" . $hotel['name'] . "</td>";
                    echo "<td>" . $hotel['description'] . "</td>";
                    echo "<td>" . $hotel['parking'] . "</td>";
                    echo "<td>" . $hotel['vote'] . "</td>";
                    echo "<td>" . $hotel['distance_to_center'] . " Km" . "</td>";
                    echo "</tr>";
                }


                ?>
            </table>
        </div>
    </main>
</body>

</html>