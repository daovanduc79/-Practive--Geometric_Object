<?php
include_once 'Circle/Circle.php';
include_once 'Circle/Cylinder.php';
include_once 'Rectangle/Rectangle.php';
include_once 'Rectangle/Square.php';

$circle = new Circle('circle-01', 5);
echo $circle->calculateArea() . '<br>';
echo $circle->calculatePerimeter() . '<br>';

$cylinder = new Cylinder('cylinder-01', 5, 3);
echo $cylinder->calculateArea() . '<br>';
echo $cylinder->calculatePerimeter() . '<br>';
echo $cylinder->calculateVolume() . '<br>';

$rectangle = new Rectangle('rectangle-01', 10, 5);
echo $rectangle->calculateArea() . '<br>';
echo $rectangle->calculatePerimeter() . '<br>';

$square = new Square('square-01', 10);
echo $square->calculateArea() . '<br>';
echo $square->calculatePerimeter() . '<br>';