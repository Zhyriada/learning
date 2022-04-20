<?php
function outArg(...$items)
{
    foreach ($items as $arg) {
        echo "$arg<br>";
    }
}

outArg('php', 'c++', 'pyton', 'java');
?>