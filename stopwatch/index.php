<?php
include_once "StopWatch.php";
$time = new StopWatch();
    $time->start();
    $time->sum();
    $time->stop();
    echo ($time->getElapsedTime());
?>
