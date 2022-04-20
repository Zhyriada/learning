<?php

$length = rand(5,10);
$arr=[];
for ($i=0; $i<$length; $i++){
    $arr[$i] = rand(0,100);
}
sort($arr); // sort elements
echo '<pre>';
print_r($arr);
echo '</pre>';