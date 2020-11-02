<?php

class Odometer
{
    private float $odometer;

    public function __construct(int $odometer)
    {
        $this->odometer = $odometer;
    }

    public function getOdometer(): int
    {
        return $this->odometer;
    }
    public function updateOdometer(int $amount): void
    {
        $this->odometer += $amount;
    }



}