<!DOCTYPE html>
<html lang="en">
    <head>
        <title>INFO 2340 - Assignment 7</title>
        <meta charset= "utf-8">
    </head>
    <body>
    <?php
        $food_choice = "meatloaf";
        $rating = 3;
        $location_visit = "the Zoo";
        $favorite_animal = "chickenhawk";
    ?>
        <h1>Good morning, Nebraska!</h1>
        <div>Last night I ate <?php echo $food_choice;?>.</div>
        <div>While it was good, it wasn't perfect. I'd give it <?php echo $rating; ?> stars out of 4.</div>
        <div>Tomorrow I plan to go to <?php echo $location_visit; ?>.</div>
        <div>My favorite animal is the <?php echo $favorite_animal; ?>.</div>
</body>
</html>