<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?php 
            require('reusables/connect.php');
            $schoolID = $_GET['id'];
            $query = "SELECT * FROM schools WHERE `id` = '$schoolID'";
            $school = mysqli_query($connect, $query);
    
            $result = $school -> fetch_assoc();
        ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Are you sure you want to delete: <?php echo $result['School Name'] ?>?</h1>
            </div>
            <div>
                <form method="POST" action="includes/deleteSchool.php">
                    <input type="hidden" name="id" value="<?php echo $schoolID; ?>">
                    <button type="submit" class="btn btn-danger" name="deleteThisSchool">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>