<?php
function recursiya($counter)
{
    if ($counter > 0) {
        echo ($counter--) . '<br>';
        recursiya($counter);
    } else return;
}

recursiya(77);