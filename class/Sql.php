<?php 

class Sql extends PDO{

	private $conn;

	public function __construct(){

<<<<<<< HEAD
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		//("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
=======
		$this->conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

		//("mysql:host=localhost;dbname=dbphp7", "root", "");

	}

	private function setParams($estatement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			$this->setParam($estatement, $key, $value);
		}
	}

	private function setParam($estatement, $key, $value){

		$estatement->bindParam($key, $value);

	}

	public function query($rawQuwey, $params = array()){

		$stmt = $this->conn->prepare($rawQuwey);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
		
	}

	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}


 ?>