<?php

class Contractors
{
    private $CompanyName;
    private $CEO;
    private $Contact;
    private $Activity;
    private $Region;

    public function __construct($CompanyName, $CEO, $Contact, $Activity, $Region)
    {
        $this->CompanyName = $CompanyName;
        $this->CEO = $CEO;
        $this->Contact = $Contact;
        $this->Activity = $Activity;
        $this->Region = $Region;
    }
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    public function getCEO()
    {
        return $this->CEO;
    }
    public function getContact()
    {
        return $this->Contact;
    }
    public function getActivity()
    {
        return $this->Activity;
    }
    public function getRegion()
    {
        return $this->Region;
    }
}
$obj = new Contractors
(
    'BDH',
    'Eduard',
    '09324580**',
    'Advertising Agency',
    'all of Ukraine'
);
echo $obj->getCompanyName() . ' - ';
echo $obj->getCEO() . ' - ';
echo $obj->getContact() . ' - ';
echo $obj->getActivity() . ' - ';
echo $obj->getRegion();

