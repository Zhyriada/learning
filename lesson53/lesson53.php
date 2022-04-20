<?php
class People {
    private $name;
    public function __construct()
    {echo 'Вызов конструктора';
        $this -> name = "Ivan";
    }
}
$obj = new People();
echo '<pre>';
print_r($obj);