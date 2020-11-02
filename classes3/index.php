<?php

require_once 'FuelGauge.php';
require_once 'Odometer.php';

$x = new FuelGauge(70,10);
$y = new Odometer(50);

while ($x->getCurrentFuelTank() > 0) {
    $distance = 10;

    $x->updateDistance($distance);

    echo 'Distance: (+' . $distance . 'km) ' . $y->getOdometer() . 'km ';
    echo 'Fuel: ' . $x->getCurrentFuelTank() . PHP_EOL;

    sleep(1);
}