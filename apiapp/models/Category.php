<?php
	class Category{
		//Database
		private $conn;
		private $table = 'categories';
		
		//Properties
		public $id;
		public $name;
		public $created_at;
		
		//Constructor
		public function __construct($db){
			$this->conn = $db;
		}
		
		//Get categories
		public function read(){
			//Query
			$query = 'SELECT id, name, created_at FROM '. $this->table. ' ORDER BY created_at DESC';
			
			//Prepare statement
			$stmt = $this->conn->prepare($query);
			
			//Execute
			$stmt->execute();
			
			return $stmt;
		}
	}
?>