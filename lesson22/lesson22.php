<?php

//$y = 450;
//$y = $y < 0 ? -$y: $y;
//echo $y;

$n = 0;
finish:
$y = 5;
$y = $y ?? 1;

echo $y;

$n++;
if ($n > 6){
    goto end;
}
goto finish;
end:

?>