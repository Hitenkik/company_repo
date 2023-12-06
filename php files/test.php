<?php
// $colors = array("red", "green", "blue", "yellow"); 
// $colors[2] = "red";
// print_r ($colors);

$cars = array(
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2, array("BMW#21", 15, 13)),
  array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";
$myArray = $cars[2][3];
echo "My Value: " . $myArray[0] . ", last character is: " . substr($myArray[0], -2);

echo $cars;

?>