<?php

class Transaction
{
    public $name;
    public $amount;
    public $date;

    public function __construct($name, $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->date = date('Y-m-d H:i:s');
    }
}
