<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // set up a variable and change it's value based on the time given
    $time = rand(5, 21);
    $meal;
    $timeAmPm;
    $breakfast = "Bananas, Apples, and Oats.";
    $lunch = "Fish, Chicken, and Vegetables.";
    $dinner = "Steak, Carrots, and Broccoli.";
    $mealServed;

    if ($time < 9) {
        $meal = "breakfast";
        $mealServed = $breakfast;
    } elseif ($time < 14) {
        $meal = "lunch";
        $mealServed = $lunch;
    } else {
        $meal = "dinner";
        $mealServed = $dinner;
    }

    if ($time > 12) {
        $timeAmPm = ($time - 12) . 'pm';
    } else {
        $timeAmPm =  $time . 'am';
    }

    echo '<h1>The time is ' . $timeAmPm . "</h1>";
    echo '<h2>The animals should eat ' . $meal .'.</h2>';
    echo '<p>This includes ' . $mealServed . '</p>';
    ?>
</body>
</html>