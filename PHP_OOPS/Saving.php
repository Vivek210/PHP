<?php
class Saving extends User implements Account
{
	var $bank = "hdfc";
	public function withdraw($amount)
	{
		echo "<br>Action for : Withdraw money "  .$amount . " from ". $this->FirstName . "'s account <br>"; 

		if( $amount <= 0 || $amount > $this->Balance )
		{
			echo "<p style='color:white; background-color:darkred;' >You cant withdraw the  money less than 0 or more than your balance</p>";
		}
		else if (( $this->Balance - $amount ) < 10000 )
		{
			echo "<p style='color:white; background-color:darkred; '>Sorry , In saving account minimum balance should be 10000 rs.</p> ";
		}
		else
		{
			$this->Balance -= $amount;
			echo "<h4>$this->FirstName :". " $amount has been withdraw and the availabe balance is: ".($this->Balance) . "</h4><br>";
		}
	}
	public function deposit($amount)
	{
		echo "<br>Action for: Deposit money "  .$amount . " in ". $this->FirstName . "'s account "; 

		if($amount <= 0 )
		{
			echo "<p style='color:white; background-color:darkred; '>You can't deposit less than 0 Rs.</p>";
		}

		else if ($amount > 49000)
		{
			echo "<p style='color:white; background-color:darkred; '>Sorry , In Saving account you can't deposit more than 49000 Rs.</p>";
		}

		else
		{
			$this->Balance += $amount;
			echo "<h4>$this->FirstName "."You have a "."$this->Balance" . " Rs in your account</h4>";
		}
	}
	public function transfer($bank1,$amount, $ac_no, $IFSC_code)
	{
		$bank = "hdfc";

		if($bank == $bank1)
		{
			echo "<h2>for transferring the money in same bank</h2> <br>";
			echo "the account number that you want to transfer in:".$ac_no ."<br>";
			echo "the ammount that you want to transfer ".$amount. "<br>";		

			if($this->Account_no != $ac_no)
			{
				$simple2 = new Saving("v789","Mihir","Patel","210patel@gmail.com",20000,789456123);
				$simple2->deposit($amount);
				$this->Balance -= $amount;
				echo $this->FirstName ." After transferring You have ".$this->Balance .".Rs balance";
			}

			else
			{
				echo"You can not transfer the money";
			}
		}

		else
		{
			echo "<h2>for transferring the money in different bank</h2> <br>";
			echo "the account number that you want to transfer in:".$ac_no . "<br>";
			echo "the ammount that you want to transfer ".$amount ."<br>";
			echo "the ifsc code for the bank ".$IFSC_code . "<br>";

			if($this->Account_no != $ac_no)
			{
				$simple2 = new Saving("v789","Mihir","Patel","210patel@gmail.com",20000,789456123);
				$simple2->deposit($amount);
				$this->Balance -= $amount;
				echo "Mr Vivek, After transferring You have ".$this->Balance .".Rs balance";
			}

			else
			{
				echo "<br>You can not transfer the money";
			}

		}
	}
}
?>