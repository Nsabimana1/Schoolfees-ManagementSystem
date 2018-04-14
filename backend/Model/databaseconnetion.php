<?php
class Database_connect{
	protected $servername;
	protected $username;
	protected $password;
	protected $dbname;

	protected function connect()
	{
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->dbname = "school management";

	$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	return $conn;
	}
}

?>