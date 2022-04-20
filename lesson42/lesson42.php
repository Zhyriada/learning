<?php
$name = ["Ed", "Ivan", "Andre", "Igor"];
$name[] = "Anna";
foreach ($name as $Names) {
//    echo "Privet "; //если добавить эту строку в результате будет ПриветЭд ПриветИван
    echo ($Names) . "</br>"; //вывести элементы массива
}
//посчитать количество элементов в массиве
$sum = count($name);
echo $sum . "</br>";
//echo '<pre>';
//print_r($Names);
//echo '</pre>';