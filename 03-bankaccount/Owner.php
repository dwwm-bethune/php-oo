<?php

class Owner
{
    public string $name;
    public int $salary;
    public ?BankAccount $bankAccount;

    public function __construct($name, $salary = 1500, $bankAccount = null)
    {
        $this->name = $name;
        $this->salary = $salary;
        
        if ($bankAccount instanceof BankAccount) {
            $bankAccount->addOwner($this);
        }
    }

    public function pay()
    {
        if ($this->bankAccount instanceof BankAccount) {
            $this->bankAccount->depositMoney($this->salary);
        }
    }
}
