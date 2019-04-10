<?php
include "Circle.php";
$circle = new Circle("indigo", 4);
echo 'Area: ' . $circle->calculateArea();
echo '<br>';
echo 'Perimeter: ' . $circle->calculatePerimeter();