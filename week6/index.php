<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <?php require('reusables/nav.php') ?>
            </div>
        </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="display-2">
                Schools
            </h1>
        </div>  
    </div>
    <div class="row">
        <?php
                require('reusables/connect.php');
                
                $query = 'SELECT * FROM schools';
                $schools = mysqli_query($connect, $query);

                foreach($schools as $school) {
                    echo '<div class="card col-md-4 mb-2">
                    <div class="card-body">
                      <h5 class="card-title">' . $school['School Name'] . '</h5>
                      <p class="card-text">' . $school['School Level'] . '</p>
                      <span class="badge bg-secondary">' . $school['Phone'] . ' </span><br><br>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">

                                <form method="GET" action="updateSchool.php">
                                    <input type="hidden" name="id" value="'. $school['id'] .'">
                                    <button class="btn btn-sm btn-primary">Update</button>
                                </form>
                                
                            </div>
                            <div class="col">

                                <form method="GET" action="deleteSchool.php">
                                    <input type="hidden" name="id" value="'. $school['id'] .'">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                  </div>';
                }
        
            ?>
    </div>
</div>
    
</body>
</html>