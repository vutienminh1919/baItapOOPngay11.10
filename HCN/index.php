<?php
include_once "Rectangle.php";
$rectangle = new Rectangle(10, 20);
echo($rectangle->display()."<br>");
echo("rectangle's area is: " . $rectangle->getArea()."<br>");
echo("rectangle's parameter is: " . $rectangle->getParameter());
