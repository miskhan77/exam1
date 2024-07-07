<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is: $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is: $num2";
} else {
    echo "The largest number is: $num3";
}
?>




<?php
// Store the Celsius temperature in a variable
$celsius = 32;

// Convert the Celsius temperature to Fahrenheit
$fahrenheit = ($celsius * 9/5) + 32;

// Print the result using printf to show up to 2 decimal points
printf("The temperature in Fahrenheit is: %.2f", $fahrenheit);
?>

