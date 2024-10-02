<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>MySQL Practice</title>
</head>
<body>
    <?php 
        
        $connect = mysqli_connect(
            'localhost',
            'root',
            'root',
            'HTTP5225SQL');
        
        if (!$connect) {
            echo 'Error Code: ' . mysqli_connect_error();
            echo 'Error Message: ' . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT `Name`, `Hex` FROM `colors`';
            $results = mysqli_query($connect, $query);
            if(!$results) {
                echo 'Error Message: ' . mysqli_error($connect);
            } else {
                // echo 'The query found the following number of results: ' . mysqli_num_rows($results);
                while($row = $results -> fetch_assoc()) {
                echo '<div style="background-color:' . $row['Hex'] .'">' . $row['Name'] . '</div>';
                };
            };
    ?>
</body>
</html>