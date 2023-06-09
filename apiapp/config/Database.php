<?php

class Database{
	//Database Parameters
	private $host = 'localhost';
	private $db_name = 'api_app';
	private $db_user = 'root';
	private $db_psw = 'root';	
	private $conn;
	
	//Database connection
	public function connect(){
		$this->conn = null;
		
		try{
			$this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name,$this->db_user,$this->db_psw);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo 'Connection Error: ' . $e->getMessage();
		}
		
		return $this->conn;
		
	}
	
}

?>