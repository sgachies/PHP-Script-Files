<?php


class BankAccount{

private $balance=100;

public function OldBalance(){
echo "Old Balance KSH".$this->balance;
return $this->balance;
}

public function NewBalance($amount){
echo "New Balance KSH".$this->balance=$this->balance+$amount;
return $this->balance;
}

public function IncBal($inc){

echo "New Balance incremented KSH by".$inc."<br>";
for($i=1;$i<=5;$i++)
{
echo $this->balance=$this->balance+$inc."<br>";
}
return $this->balance;
}

}

$user=new BankAccount();
echo "<br>";
$user->OldBalance();
echo "<br>";
$user->NewBalance(100);
echo "<br>..............................<br>";
$user->IncBal(10);
echo "<br>";




?>