<?php

require("helpers/require.php");

$price1 = 200;
$qty1 = 2;
totalPrice($price1, $qty1);

$price2 = 250;
$qty2 = 3;
totalPrice($price2, $qty2);

$total1 = totalPrice($price1, $qty1);
$total2 = totalPrice($price2, $qty2);


echo "<h1>Total price for both items is: " . ($total1 + $total2) . "</h1>";