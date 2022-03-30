<?php
//$prog = 'js';
//if ($prog == 'php') {
//    echo 'Язык PHP';
//} elseif ($prog == 'js') {
//    echo 'Язык JS';
//} elseif ($prog == 'c#') {
//    echo 'Язык C#';
//} else {
//    echo 'Неизвестный язык';
//}

$char = 'js';
switch ($char) {
    case 'Php':
        ?>
<h1>Язык PHP</h1>
        <?php
        break; //показываем, что наш кейс завершился
    case 'js':
        ?>
<h1>Язык JAVA</h1>
        <?php
        break;
    case 'C#':
        ?>
<h1>Язык C#</h1>
        <?php
        break;
    default:
        ?>
<h1>Неизвестный язык</h1>
        <?php
}
        ?>

