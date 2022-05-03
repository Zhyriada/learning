<?php

class Contractors
{
    private $CompanyName;

    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }
}

$person = new Contractors();
//$person->CompanyName = 'BDH'; // Throws an error
$person->setCompanyName('BDH');
echo $person->getCompanyName(); // prints 'BDH'

?>