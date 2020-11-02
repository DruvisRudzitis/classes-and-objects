<?php

require_once 'Savingsaccount.php';

$balance = (float) readline('How much money is in the account?: ');
$rate = (float) readline('Enter the annual interest rate: ');
$months = (int) readline('How long has the account been opened?: ');

$account = new SavingsAccount($balance, $rate);

$month = 1;

while($month <= $months){
    $deposit = (float) readline('Enter amount deposited for month ' . $month . ': ');
    $account->deposit($deposit);
    $withdraw = (float) readline('Enter amount withdrawn for month ' . $month . ': ');
    $account->withdraw($withdraw);
    $account->monthlyInterest();
    $month++;
}

echo 'Total deposited: ' . $account->getDeposited() . PHP_EOL;
echo 'Total withdrawn: ' . $account->getWithdraw() . PHP_EOL;
echo 'Interest earned: ' . number_format($account->getInterest(), 2) . PHP_EOL;
echo 'Ending balance: ' . number_format($account->getBalance(), 2) . PHP_EOL;

