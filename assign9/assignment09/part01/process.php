<!DOCTYPE html>
<head>
    <title>Assignment 9, Part 1</title>
</head>
<body>

<?php
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    function bmi_calc($weight, $height){
        return ($weight/($height * $height)) * 703;
    }

    $bmi = bmi_calc($weight, $height);

    if ($bmi < 18){
        $bmi_level = "underweight";
    } else if ($bmi > 30){
        $bmi_level = "obese";
    } else{
        $bmi_level = "normal";
    }
    //formula for calculating BMI:
    //BMI = (Weight in Pounds / (Height in inches x Height in inches)) x 703
    //source: http://www.bmi-calculator.net/bmi-formula.php

?>

<h1>BMI Calculation</h1>
<p id="output-here">Your BMI is <?php echo $bmi; ?>, which is considered <?php echo $bmi_level; ?></p>
</body>