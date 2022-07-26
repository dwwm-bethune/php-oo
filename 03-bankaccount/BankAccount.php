<?php

class BankAccount
{
    public $identifier;
    public $name;
    private $amount;
    private $owners = [];
    private static $increment = 1;
    private $history = [];

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

        $this->addHistory('deposit', $amount);
    }

    public function withdrawMoney($amount)
    {
        if ($this->amount - $amount < 0) {
            throw new Exception('Le solde du compte est vide.');
        }

        $this->amount -= $amount;

        $this->addHistory('withdraw', $amount);
    }

    /**
     * Permet de faire un virement.
     *
     * @param  BankAccount  $receiver
     * @param  int  $amount
     * @return void
     */
    public function wireTo($receiver, $amount)
    {
        $this->withdrawMoney($amount);
        $receiver->depositMoney($amount);

        $this->addHistory('deposit to '.$receiver->name, $amount);
        $receiver->addHistory('deposit from '.$this->name, $amount);
    }

    private function addHistory($name, $amount)
    {
        $this->history[] = new Transaction($name, $amount);

        return $this;
    }

    public function showHistory()
    {
        echo '<ul>';
        foreach ($this->history as $transaction) {
            echo '<li>'.$transaction->name.' le '.$transaction->date.' de '.$transaction->amount.' €</li>';
        }
        echo '</ul>';
    }

    public function addOwner(Owner $owner)
    {
        // L'objet $this devient le compte du owner
        $owner->bankAccount = $this;
        // L'owner $owner est ajouté dans une propriété de $this
        $this->owners[] = $owner;
    }

    public function getOwners()
    {
        return $this->owners;
    }
}
