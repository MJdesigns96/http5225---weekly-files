<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boop</title>
</head>
<body>

    <?php 
    echo '<h1>' . 'boop' . '</h1>';
    ?>
    <form action="magicNum.php" method="post">
    Number: <input type="number" name="userNum" min="0">
    <input type="submit">
    </form>
</body>
</html>