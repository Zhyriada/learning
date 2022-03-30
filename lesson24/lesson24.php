<?php
$page = file_get_contents('Новый текстовый документ.txt');
$page .= "\nЕще одна строка доп";

$date = date("Y-m-d-H-i-s");

file_put_contents($date.'.txt', $page);

?>


