<?php

function totalPrice($price, $qty) {
    $total = $price * $qty;
    echo "<p>Total price is: $total</p>";

    return $total;
}