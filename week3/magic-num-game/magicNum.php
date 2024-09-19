<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Number Game</title>
</head>
<body>

    <?php 
    echo '<h1>' . 'The Magic Number Game' . '</h1>';
    echo '<p>' . 'Please enter a number below.' . '</p>';

    ?>
    <form action="fizzbuzz.php" method="POST">
    Number: <input type="number" name="userNum" min="0">
    <input type="submit">
    </form>
</body>
</html>