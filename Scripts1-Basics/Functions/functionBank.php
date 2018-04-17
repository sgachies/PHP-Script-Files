<?php

class BankAccount{
//intialize variable balance
public $balance=0;

public function DisplayBalance(){
return 'Balance:'.$this->balance;
}

public function Withdraw($amount){
if($amount>($this->balance)){
echo 'Not enough money to withdraw.<br>';
}else{
$this->balance=$this->balance-$amount;
}
return $this->balance;
}

public function Deposit($amount){
$this->balance=$this->balance+$amount;
return $this->balance;
}
}

 $alex=new BankAccount();
 $billy=new BankAccount();
 
 echo 'alex deposited:'.$alex->Deposit(500).'<br>';
 echo 'billy deposited:'.$billy->Deposit(600).'<br>';
 
 echo 'alex withdrew:'.$alex->Withdraw(100).'<br>';
 echo 'billy withdrew:'.$billy->Withdraw(200).'<br>';
 echo "........................................................<br>";
 echo  'alex  balance is:'.$alex->DisplayBalance().'<br>';
 echo  'billy balance is:'.$billy->DisplayBalance().'<br>';





?>