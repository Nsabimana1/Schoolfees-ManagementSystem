<?php
class Database{
	private $server; 
	private $user;
	private $password;
	private $dbname;

	protected function connect(){
		$this-> servername= "localhost";
		$this-> username= 'root';
		$this-> password ='';
		$this-> dbnmane = "school management";
		$conn = new mysqli($this-> servername, $this-> username, $this-> password, $this-> dbnmane);
		return $conn;
	}

	// // protected function connect()
	// // {
	// // 	$this->servername = "localhost";
	// // 	$this->username = "root";
	// // 	$this->password = "";
	// // 	$this->dbname = "school management";

	// // 	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	// // 	return $conn;
	// }
}

?>


