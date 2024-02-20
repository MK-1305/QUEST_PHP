<?php
require 'vending_machine.php';

$hotCupCoffee = new CupCoffee('hot');
$cider = new Beverage('cider');
$snack = new Snack('potato chips');

$vendingMachine = new VendingMachine('サントリー');
$vendingMachine->depositCoin(100);
$vendingMachine->depositCoin(100);
echo $vendingMachine->pressButton($cider) . PHP_EOL;

echo $vendingMachine->pressButton($hotCupCoffee) . PHP_EOL;
$vendingMachine->addCup(1);
echo $vendingMachine->pressButton($hotCupCoffee) . PHP_EOL;

echo $vendingMachine->pressButton($snack) . PHP_EOL;
$vendingMachine->depositCoin(100) . PHP_EOL;
$vendingMachine->depositCoin(100) . PHP_EOL;
echo $vendingMachine->pressButton($snack) . PHP_EOL;
?>