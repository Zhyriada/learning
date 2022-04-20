<?php
$text = '[b]PHP - интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
echo $text;

echo '</br>';
$text = str_replace('[b]','<b>',$text);
$text = str_replace('[/b]','</b>',$text, $number);
echo $text;

echo '</br>';
echo 'Сделано замен: ' . $number;