<?php

class energy {

    private int $customers;
    private float $purchases;
    private float $citrus;
    private string $buyers;
    private string $citrusLovers;


    public function __construct(int $customers,float $citrus,float $purchases)
    {
        $this->customers = $customers;
        $this->purchases = $purchases;
        $this->citrus = $citrus;
    }

    public function getCustomers(): int
    {
        return $this->customers;
    }

    public function getPurchases(): float
    {
        return $this->purchases;
    }

    public function getCitrus(): float
    {
        return $this->citrus;
    }

    public function getBuyers(): float
    {
        return $this->buyers = round($this->customers * $this->purchases);
    }
    public function getCitrusLovers(): float
    {
        return $this->citrusLovers = round($this->buyers * $this->citrus);
    }

}

$info = new energy(12467,0.14, 0.64);


echo "Total number of people surveyed " . $info->getCustomers() . "\n";
echo "Approximately " . $info->getBuyers() . " bought at least one energy drink" . "\n";
echo $info->getCitrusLovers() . " of those " . "prefer citrus flavored energy drinks." . "\n";
