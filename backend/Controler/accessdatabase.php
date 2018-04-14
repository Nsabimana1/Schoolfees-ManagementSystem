<?php 
	include 'databaseconnetion.php';
	class AccessData extends Database{
		public $connected_data;
		Public function dbconnect(){
			$connected_data = $this->connect();
			// $database = new Database;
			return $connected_data;
		}
	}
?>