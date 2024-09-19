<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php 
        $userNum = $_POST["userNum"];
        $magicNum;
        $condition = false;

        if ($userNum % 3 === 0) {
            $magicNum .= 'Fizz';
            $condition = true;
        } 
        if ($userNum % 5 === 0) {
            $magicNum .= 'Buzz';
            $condition = true;
        } 
        if (!$condition) {
            $magicNum .= $userNum;
        }

        echo '<h1> The Magic Number is: ' . $magicNum;
    ?>
</body>
</html>