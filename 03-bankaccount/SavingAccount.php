<?php

class SavingAccount extends BankAccount
{
    public function applyInterest($rate)
    {
        $this->depositMoney($this->getBalance() * $rate / 100);

        return $this;
    }
}
