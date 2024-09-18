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
    // $time = rand(5, 21);
    //  $comp = $time;
    date_default_timezone_set("America/Toronto");
    $time = date("h:ia");
    $comp = date('H');
    $timeBreafast = 9;
    $timeLunch = 18;

    $meal;
    $breakfast = "Bananas, Apples, and Oats.";
    $lunch = "Fish, Chicken, and Vegetables.";
    $dinner = "Steak, Carrots, and Broccoli.";
    $mealServed;

    if ($comp <= $timeBreafast) {
        $meal = "breakfast";
        $mealServed = $breakfast;
    } elseif ($comp <= $timeLunch) {
        $meal = "lunch";
        $mealServed = $lunch;
    } else {
        $meal = "dinner";
        $mealServed = $dinner;
    }

    echo '<h1>The time is ' . $time . "</h1>";
    echo '<h2>The animals should eat ' . $meal .'.</h2>';
    echo '<p>This includes ' . $mealServed . '</p>';
    ?>
</body>
</html>