<?php
abstract class Account
{
	abstract function withdraw($amount);
	abstract function deposit($amount);
	abstract function transfer($bank1 , $amount);
	function getBalance()
	{
		$balance = 15000;
		echo "the available balance is ".$balance . "<br/>";
	}
}
 class Saving extends Account
{
	var $acno = 12345654646;
	var $balance;
	var $bank = "hdfc";
	var $amount = 0;


	public function withdraw($amount)
	{
		$balance = 15000;	
		if($amount <= 0 || $amount > $balance)
		{
			echo "error";
		}
		else if (($balance - $amount) < 10000)
		{
			echo "error1";
		}
		else
		{
			echo "$amount has been withdraw and the availabe balance is ".($balance - $amount);
		}
	}
	public function deposit($amount)
	{
		$balance = 15000;	
		if($amount <= 0 )
		{
			echo "can't deposit";
		}
		else if ($amount > 49000)
		{
			echo "too much money";
		}
		else
		{
			echo "correct";
		}
	}
	public function transfer($bank1,$amount)
	{
		$bank = "hdfc";
		if($bank == $bank1)
		{
			echo "enter the account number that you want to transfer in:"."<br>";
			echo "enter the ammount that you want to transfer ";
		}
		else
		{
			echo "enter the account number that you want to transfer in:"."<br>";
			echo "enter the ammount that you want to transfer ". "<br>";
			echo "enter the ifsc code for the bank";
		}
	}
}
$simple = new Saving();
//$simple->getBalance();
//$simple->withdraw(3000);
$simple->transfer("bob",5000);


?>