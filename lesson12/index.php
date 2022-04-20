<?php
require 'point.php';

$first = 5;
$second = &$first;
$second = 3;
echo $first;

// $first = new Point;
// $first->x=3;
// $first->y=3;

// $second = $first;
// $second->x=5;
// $second->y=5;

// echo "x: {$second->x}, y: {$second->y}";
?>