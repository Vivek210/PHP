<?php
class User
{
	var $UserName = "xyz";
	var $FirstName;
	var $LastName;
	var $Email;
	function public __construct($UserName , $FirstName ,$LastName , $Email )
	{
		this->UserName = $UserName;
		this->FirstName = $FirstName;
		this->LastName = $LAstName;
		this->Email = $Email;
		echo "$UserName";
	}

}
$Simple =new $User();




?>