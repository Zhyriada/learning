<?php
$i = 0;

while($i <= 5) {
    $i++;
    if($i == 4) continue; // 4 не будет при выводе
    if($i > 5) break;
echo "$i<br>";
}

