<?php
$currentAge = 17;
$DeathAge = 25;
$eatingAmount = 1;

$amountEaten = (($DeathAge - $currentAge) * 365) * $eatingAmount;

echo "you would eat $amountEaten bags of your favourite snack by the time you become $DeathAge";