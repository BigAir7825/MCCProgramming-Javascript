<!DOCTYPE html>
<html lang="en">
<head>
  <title>INFO 2340 Assignment 8</title>
  <meta charset="utf-8"> 
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
  include "includes/header.php";

  $weight = 48;
  $age = 16;
  $first_name = "Will";
  $last_name = "Adair";
  function poundsToKg($weight)
  {
    $metric_weight = $weight * (1/ 2.2);
    return $metric_weight;
  }
?>
<p>Good morning, ladies and gentlemen!</p>
<p>My name is <?php echo $first_name; ?> <?php echo $last_name; ?>!</p>
<p>I am <?php echo $age; ?> years old. I weigh <?php echo $weight; ?> pounds, which is <?php echo poundsToKg($weight); ?> kg!</p>

<?php
  include "includes/footer.php";
?>

</body>
</html>


