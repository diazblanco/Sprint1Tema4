<?php

include 'Shape.php';
include 'Rectangle.php';
include 'Triangle.php';



$triangle1 = new Triangle(10,10);
$rectable1 = new Rectangle(10,10);

$triangle1->area();
$rectable1->area();

?>