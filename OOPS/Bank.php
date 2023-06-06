<?php
class Bank{
    private $balance;

    public function getBalance(){
        return $this->balance;
    }
    function __construct($balance) {
        $this->balance=$balance;
    }    

    function depositAmount($amt) {
        $this->balance=$this->balance+$amt;

    }

    function deductAmount($amt) {
        if($this->balance<=0){
            echo "No Balance in the Account".PHP_EOL;
            return;
        }
        if($this->balance<$amt) {
            echo"Requested amount is greater than balance". PHP_EOL;
            return;
        }
        $this->balance=$this->balance-$amt;

    }
    }
    $bank1=new Bank(100);
    echo $bank1->getBalance().PHP_EOL;
    $bank1->depositAmount(500);
    echo $bank1->getBalance().PHP_EOL;
    $bank1->deductAmount(500);
    echo $bank1->getBalance().PHP_EOL;
    
