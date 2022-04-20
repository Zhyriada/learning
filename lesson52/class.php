<?php
//class Hello
//{
//    public function printText()
//    {
//        return "Hello, World!";
//    }
//}
//$obj = new Hello;
//echo $obj->printText();

class Point
{
    private $x;
    private $y;

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function distance()
    {
        return sqrt($this->getX() ** 2 + $this->getY() ** 2);
    }
}

$p1 = new Point;
$p1->setX(5);
$p1->setY(7);
echo $p1->distance();
