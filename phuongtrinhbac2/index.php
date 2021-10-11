<?php
include_once "Phuongtrinhbac2.php";
$phuongtrinh = new Phuongtrinhbac2(0,0, 5);
echo("he so thu nhat: " . $phuongtrinh->getA() . "<br>");
echo("he so thu hai: " . $phuongtrinh->getB() . "<br>");
echo("he so thu ba: " . $phuongtrinh->getC() . "<br>");
echo(" delta = " . $phuongtrinh->getDelta()."<br>");
$phuongtrinh->calculate();
?>