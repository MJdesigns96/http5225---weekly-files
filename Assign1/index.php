<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Parks and Recreation - FAcilities</title>
</head>
<body>
    <div class="container">
        <h1 class="pt-5 mb-4">Toronto Parks and Recreation</h1>
        <h2 class="mb-4">Parks:</h2>
        <table class="table table-bordered table-striped table-hover mb-4">
                <thead>
                    <tr class="table-info">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Address</th>
                        <th scope="col">Amenities</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // connect to the SQL db
                    require('reusables/connect.php');
                    $query = 'SELECT * FROM parks_and_recreation_facilities___4326';
                    $parks_facs = mysqli_query($connect, $query);
                // use a foreach loop to create a table fow for each entry
                    foreach($parks_facs as $parkf) {
                        $id = $parkf['_id'];
                        if ($id <= 50) {
                            if ($parkf['TYPE'] = "Park") {
                                echo '<tr scope= row>' .
                                        '<th>' . $parkf['_id'] . '</th>'.
                                        '<td>' . $parkf['ASSET_NAME'] . '</td>'.
                                        '<td>' . $parkf['TYPE'] . '</td>'.
                                        '<td>' . $parkf['ADDRESS'] . '</td>'.
                                        '<td>' . $parkf['AMENITIES'] . '</td>'.
                                        '<td><a href=" ' . $parkf['URL'] .' " target="_blank"</a>'.  $parkf['URL'] . '</td>'.
                                    '</tr>';
                            } 
                        }
                    };
                ?>
                </tbody>
            </table>
            <?php 
                if ($id = 51) {
                    echo '<div class="mb-5"> 50 Entries have been shown</div>';
                }
            ?>
            
    </div>
</body>
</html>