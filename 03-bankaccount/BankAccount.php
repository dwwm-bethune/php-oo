<?php

class BankAccount
{
    public $identifier;
    public $name;
    private $amount;
    private static $increment = 1;

    public function __construct($identifier, $name, $amount = 0)
    {
        $this->identifier = self::$increment++;
        // $this->identifier = bin2hex(random_bytes(32));
        $this->name = $name;
        $this->amount = $amount;
    }

    public function getBalance()
    {
        return $this->amount;
    }

    public function depositMoney($amount)
    {
        if ($this->amount + $amount < 0) {
            throw new Exception('Le solde du compte est vide.');
        }

        $this->amount += $amount;
    }

    public function withdrawMoney($amount)
    {
        if ($this->amount - $amount < 0) {
            throw new Exception('Le solde du compte est vide.');
        }

        $this->amount -= $amount;
    }
}
