<?php

$transport = [
    'Авто' => ['Лада', 'Shevrolet', 'Dodge'],
    'Самолеты' => ['Ил2', 'Самолет1', 'Самолет2'],
    'Мото' => ['Мото1', 'Мото2', 'Мото3']
];
foreach ($transport as $key => $array){
    echo "<br>$key</b></br>";
    foreach ($array as $value){
        echo "<li>$value</li>"; //*
    }
}