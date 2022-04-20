<?php
$abc = [44, 11, 55, 15, 50, 10, 41, 87, 100];
for ($i = 0; $i < count($abc); $i++) {
    if ($abc[$i] % 5 == 0) {
        echo $abc[$i] . "</br>";
    }
}