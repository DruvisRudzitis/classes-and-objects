<?php

class SavingsAccount
{
    private float $balance;
    private float $interestRate;
    protected float $monthlyRate;
    protected float $deposited = 0;
    protected float $withdraw = 0;
    protected float $interest = 0;

    public function __construct(float $balance = 0, float $interestRate = 0)
    {
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    //make getters
    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getMonthlyRate(): float
    {
        return $this->monthlyRate;
    }

    public function getDeposited(): float
    {
        return $this->deposited;
    }

    public function getWithdraw(): float
    {
        return $this->withdraw;
    }

    public function getInterest(): float
    {
        return $this->interest;
    }


    public function withdraw($amount): void
    {
        $this->balance -= $amount;
        $this->withdraw += $amount;
    }

    public function deposit($amount): void
    {
        $this->balance += $amount;
        $this->deposited += $amount;
    }

    public function monthlyInterest(): void
    {
        $this->monthlyRate = $this->balance * ($this->interestRate / 12);
        $this->balance += $this->monthlyRate;
        $this->interest += $this->monthlyRate;
    }

}