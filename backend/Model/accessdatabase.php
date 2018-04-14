<?php
include 'databaseconnetion.php';
Class accessData extends Database_connect{
	public $connected_data;
	Public function dbconnect(){
		$connected_data = $this->connect();
		// $database = new Database;
		return $connected_data;
	}
}


class Current_user_information {
	public $email;
	public $password;
	function __construct($email, $password)
	{
		$this->email = $email;
		$this ->password = $password;
	}
}
?>
