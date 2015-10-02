<?php

class BankAccount
{
    /**
     * The name of the person that owns this account
     * @var string
     */
   //every property should have docblock comment

    public $owner;


    /**
     * How much money this person has
     * @var float
     */
    protected $bankBalance; //This shouldn't be public!!! Everyone can change it

    /**
     * Add some money to your account
     * @param float $amount How much you want to deposit
     * @return float
     */
    public function deposit($amount)
    {
        $this->bankBalance += $amount;
        return $this->bankBalance;
    }


    /**
     * Take out some money from your account
     * @param float $amount How much you want to withdraw
     * @todo: add validation to this to make sure they have enough money!
     *      Throw an Exception if they are broke
     * @throws Exception
     * @return float
     */
    public function withdraw($amount){
        if ($this->bankBalance < $amount ) {
            throw new Exception('Go Away'); //giving an exception
        }
        if ($this->owner == 'Samir') {
            throw new Exception('Too Broke');
        }

            $this->bankBalance = $this->bankBalance - $amount;

            return $this->bankBalance;

    }

}

try { //trying to see the error by using try/catch
    $myAccount = new BankAccount();
    $myAccount->owner = 'Samir';
    //$myAccount->bankBalance = 23.32;
    $myAccount->deposit(20);
    $myAccount->withdraw(20); //will make it overdraft     // try 50 to see Go Away message
} catch (exception $e){ // This indicates that when php catches the error it will be stored as $e
    echo 'An error occured: ' . $e->getMessage();
}

echo '<pre>';
print_r($myAccount);

die();



?>