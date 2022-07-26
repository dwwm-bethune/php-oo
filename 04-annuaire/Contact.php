<?php

class Contact
{
    public $name;
    public $firstname;
    public $phone;
    public $email;

    public function __construct($name, $firstname, $phone, $email)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->phone = $phone;
        $this->email = $email;
    }

    /**
     * Permet d'afficher un objet comme
     * une chaine.
     */
    public function __toString()
    {
        return "$this->name $this->firstname, Tel: $this->phone, Mail: $this->email";
    }
}
