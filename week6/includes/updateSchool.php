<?php 
    if(isset($_POST['updateSchool'])) {
        $schoolName = $_POST['schoolName'];
        $schoolType = $_POST['schoolType'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        require('../reusables/connect.php');

        // $query = "INSERT INTO schools (`School Name`, `School Level`, `Phone`, `Email`) VALUES (
        //     -- '$schoolName','$schoolType', '$phone', '$email'
        //     ' " . mysqli_real_escape_string($connect, $schoolName) . " ',
        //     ' " . mysqli_real_escape_string($connect, $schoolType) . " ',
        //     ' " . mysqli_real_escape_string($connect, $phone) . " ',
        //     ' " . mysqli_real_escape_string($connect, $email) . " '
        //     )";

        $query = "UPDATE `schools` 
        SET `School Name` = '" . mysqli_real_escape_string($connect, $schoolName) . "',
        `School Type` = '" . mysqli_real_escape_string($connect, $schoolType) . "',
        `phone` = '" . mysqli_real_escape_string($connect, $phone) . "',
        `email` = '" . mysqli_real_escape_string($connect, $email) . "'";

        $school = mysqli_query($connect, $query);

        if($school) {
            header("Location: ../index.php");
        } else {
            echo "There was an error adding the school: " . mysqli_error($connect);
        }
    }