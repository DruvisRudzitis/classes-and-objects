<?php


class FuelGauge
{
    private int $maxFuelTank;
    private float $fuelConsumption;
    private float $currentFuelTank;

    public function __construct(int $maxFuelTank, float $fuelConsumption)
    {
        $this->maxFuelTank = $maxFuelTank;
        $this->fuelConsumption = $fuelConsumption;
        $this->currentFuelTank = (float)$this->maxFuelTank;
    }

    public function getCurrentFuelTank(): float
    {
        return $this->currentFuelTank;
    }
    public function updateDistance(Odometer $amount):void
    {
        $this->updateFuelTank(-(($this->fuelConsumption / 100) * $amount));
    }
    public function updateFuelTank(float $amount):void
    {
        $this->currentFuelTank += $amount;
    }

}