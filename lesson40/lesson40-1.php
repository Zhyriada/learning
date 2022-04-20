<?php
function outter()
{
    function inner()
    {
        return "Hello, World!";
    }
}

outter();
echo inner();