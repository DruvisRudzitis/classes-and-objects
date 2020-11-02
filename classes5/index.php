<?php

class Date
{

    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setMonth($months): int
    {
        if ($months >= 0 && $months <= 12) {
            $this->month = $months;
        } else {
            $this->month = 0;
        }
    }

    public function setDay($days): int
    {
        if ($days >= 0 && $days <= 30) {
            $this->day = $days;
        } else {
            $this->day = 0;
        }
    }

    public function setYear($years): int
    {
        $this->year = $years;
    }

    public function DisplayDate(): string
    {
        echo $this->month . '/' . $this->day . '/' . $this->year;
    }

}

$test = new Date(69,5,2000);

echo $test->getMonth(). ', ' . $test->getDay() . ', ' . $test->getYear() . "\n";
echo $test->setMonth(4). ', ' . $test->setDay(4) . ', ' . $test->setYear(555) . "\n";

