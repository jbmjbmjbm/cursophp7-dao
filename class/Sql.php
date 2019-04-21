<?php 

class Sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
		//("mysql:host=localhost;dbname=dbphp7", "root", "");

	}
<<<<<<< HEAD
	
	private function setParams($Statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($Statement, $key, $value);
=======
	private function setParams($statment, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($key, $value);
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97
		}


	}

<<<<<<< HEAD
	private function setParam($Statement, $key, $value){

		$Statement->bindParam($key, $value);

	}

=======
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97
	public function query($rawQuwey, $params = array()){

		$stmt = $this->conn->prepare($rawQuwey);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
		
	}

<<<<<<< HEAD
	public function select($rawQuery, $params = array()):array
	{
=======
	public function select($rawQuery, $params = array()):array{
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);


	}

}


 ?>