<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-loop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>For/Loop in class</h1>
    <div class="container-fluid">
        <div class="row">
            <?php 
                // Function to fetch user data from the JSONPlaceholder API
                function getUsers() {
                    $url = "https://jsonplaceholder.typicode.com/users";
                    $data = file_get_contents($url);
                    return json_decode($data, true);
                    };
                    // Get the list of users
                    $users = getUsers();
                    foreach ($users as $entry) {
                        // print_r(array_keys($entry));
                        //name, email, street, appt number, town, email
                        $name = $entry["name"];
                        $email = $entry["email"];
                        $street = $entry["address"]["street"];
                        $appt = $entry["address"]["suite"];
                        $town = $entry["address"]["city"];
                        $website = $entry["website"];
                        echo '<div class="col-sm-3">
                            <div class="card text-white bg-secondary mb-3">
                                 <div class="card-body">
                                     <h3>' . $name . '</h3>
                                     email: ' . $email . '<br>
                                     street: ' . $street . '<br>
                                     appt: ' . $appt . '<br>
                                     town: ' . $town . '<br>
                                    website: ' . $website . '<br>
                                </div>
                            </div>
                        </div>';
                    }
            ?>
        </div>
    </div>
</body>
</html>