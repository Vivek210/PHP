<?php
 abstract class User  //abstract class that store the user's details;
{
	public $UserName ;
	var $FirstName ;
	var $LastName;
	var $Email;
	var $Balance;
	var $Account_no;

	function __construct($U_name, $F_name, $L_name, $email , $amount, $account_no)  //constructor
	{
		$this->UserName = $U_name;
		$this->FirstName = $F_name;
		$this->LastName = $L_name;
		$this->Email = $email;
		$this->Balance = $amount;
		$this->Account_no = $account_no;		
	}
	function getData()
	{
		/*$user["Username"] = $this->U_name; 
		$user["Firstname"] = $this->F_name;
		$user["Lastname"] = $this->L_name;
		$user["Email"] = $this->email;
		return $user;*/
		
		echo "<table border = \"2px solid black\" style='border-collapse:collapse; text-align:justify; width:350px	'><tr>";
		echo "<th>UserName:</th>";
		echo "<td>$this->UserName</td>";
		echo "</tr>";
		echo "<tr><th>FirstName:</th>";
		echo "<td>$this->FirstName</td></tr>";
		echo "<tr><th>LastName:</th>";
		echo "<td>$this->LastName</td></tr>";
		echo "<tr><th>Email:</th>";
		echo "<td>$this->Email</td></tr>";
		echo "<tr><th>Available balance:</th>";
		echo "<td>$this->Balance</td></tr>";
		echo "<tr><th>Account Number:</th>";
		echo "<td>$this->Account_no</td></tr></table>";		
	}

}
interface account     //interface that have a abstract methods
{
	 
	public  function withdraw($amount);
	public function deposit($amount);
	public function transfer($bank1, $amount, $ac_no, $IFSC_code);
	
}
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

class Current extends User implements Account
{
	var $bank = "hdfc";
	var $amount = 0;
	
	public function withdraw($amount)
	{
		echo "<br>Action for : Withdraw money "  .$amount . " from ". $this->FirstName . "'s account <br>"; 

		if($amount <= 0 || $amount > $this->Balance)
		{
			echo "<p style='color:white; background-color:darkred; '>You cant withdraw the  money less than 0 or more than your balance</p>";
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
			echo "the account number that you want to transfer in: ".$ac_no ."<br>";
			echo "the ammount that you want to transfer ".$amount ."<br>";		

			if($this->Account_no !== $ac_no)
			{
				$current2 = new Current("vp2","Ankur","Patel","ankur123@gmail.com",45000,789456123);
				$current2->deposit($amount);
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
			echo "the account number that you want to transfer in: ".$ac_no . "<br>";
			echo "the ammount that you want to transfer ". $amount . "<br>";
			echo "the ifsc code for the bank " .$IFSC_code ."<br>";

			if($this->Account_no !== $ac_no)
			{
				$current2 = new Current("vp2","Ankur","Patel","ankur123@gmail.com",45000,789456123);
				$current2->deposit($amount);
				$this->Balance -= $amount;
				echo $this->FirstName . " After transferring You have ".$this->Balance .".Rs balance";
			}

			else
			{
				echo"You can not transfer the money";
			}

		}
	}
}

$choice = "Saving";
	switch($choice)
	{
		case "Saving" :

			echo "<h3>The User Details are as follows: </h3><br>";

			$simple1 = new Saving("vivek210","Vivek","Patel","vivek210patel@gmail.com" ,15000,123456789);
			$simple1->getData();
			$simple2 = new Saving("mihir135","Mihir","Patel","210patel@gmail.com",20000,789456123);
			$simple2->getData();
			$simple1->withdraw(5000);
			$simple1->deposit(70000);
			$simple1->transfer("hdfc",7000,789456123,123);
			break;

		case "Current" :

			echo "<h3>The User Details are as follows: </h3><br>"; 

			$current1 = new Current("ank1","Ankit","Patel","ankit123@gmail.com",25000,123456789);
			$current2 = new Current("ankur1","Ankur","Patel","ankur123@gmail.com",45000,789456123);
			$current1->getData();
			$current2->getData();
			$current1->withdraw(5000);
			$current1->deposit(100000);
			$current1->transfer("BOB", 20000,789456123, 123);
			break;

		default:

			echo "You are not connected to BANK";
	}
?>