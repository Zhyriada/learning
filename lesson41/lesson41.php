<?php

function sum(...$items)
{
    $sum = 0;
    for ($i = 0; $i < count($items); $i++) {
        $sum += $items[$i];
    }
    return $sum;
}

echo sum(77, 13, 5, 5, 10);