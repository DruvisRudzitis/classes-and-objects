<?php


class Product
{
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(

        string $name,
        float $price,
        int $amount
    ) {

        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function printProduct(): void
    {
        echo $this->name . ", " . $this->price . " EUR, " . $this->amount . ' units' . "\n";
    }
}

