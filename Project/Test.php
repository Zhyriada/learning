<?php

function filterString($str, $char)
{
    $i = 0;
    $result = '';
    while ($i < strlen($str)) {
        $currentChar = $str[$i];
        if ($currentChar !== $char) {
            $result = "{$result}{$currentChar}";
        }
        $i += 1;
    }
    return $result;
}
print_r(filterString('asasasa', 'a'));
