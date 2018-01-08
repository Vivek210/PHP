<?php

REQUIRE("User.php");
REQUIRE("Saving.php");
REQUIRE("Current.php");

interface account     //interface that have a abstract methods
{
	 
	public  function withdraw($amount);
	public function deposit($amount);
	public function transfer($bank1, $amount, $ac_no, $IFSC_code);
	
}
$choice = "Current";
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
