<?php
do {
    $a = rand(0, 10);
    $b = rand(0, 10);
    $c = rand(0, 10);

    $sum = $a + $b + $c;
    echo $sum . '</br>';
} while ($a + $b + $c < 17);


