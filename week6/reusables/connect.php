<?php 
    $connect = mysqli_connect(
        'localhost',
        'root',
        'root',
        'school');
    if (!$connect) {
        echo 'Error Code: ' . mysqli_connect_error();
        echo 'Error Message: ' . mysqli_connect_error();
        exit;
    };