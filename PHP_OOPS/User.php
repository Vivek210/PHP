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
?>