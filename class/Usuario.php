<?php 

class Usuario{

	private $idusuario;
	private $deslogin;
<<<<<<< HEAD
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
=======
	private $desenha;
	private $stcadstro;

	public function getIdusuario(){
		return $this->usuario;
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97
	}
	public function setIdusuario($value){
		$this->idusuario = $value;
	}
	public function getDeslogin(){
		return $this->deslogin;
	}
<<<<<<< HEAD
	public function setDeslogin($value){
		$this->deslogin = $value;
	
	}public function getDessenha(){
		return $this->dessenha;
	}
	public function setDessenha($value){
		$this->dessenha = $value;
	
	}public function getDtcadastro(){
		return $this->dtcadastro;
	}
	public function setDtcadastro($value){
		$this->dtcadastro = $value;
	}

	public function loadById($id){


	$sql = new Sql();

	$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
		":ID"=>$id
	));

	if (count($results) > 0){

		$row = $results[0];

		$this->setIdusuario($row['idusuario']);
		$this->setDeslogin($row['deslogin']);
		$this->setDessenha($row['dessenha']);
		$this->setDtcadastro(new DateTime($row['dtcadastro']));
	}

}

public static function getList(){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario;");

}

public static function search($login){

	$sql = new Sql();

	return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(
		':SEARCH=>"%'.$login."%"
	));

}

public function __toString(){

	return json_encode(array(
		"idusuario"=>$this->getIdusuario(),
		"deslogin"=>$this->getDeslogin(),
		"dessenha"=>$this->getDessenha(),
		"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
	));
}

}

?>
=======
	public function setLogin($value){
		$this->deslogin = $value;
	
	}public function getDesenha){
		return $this->dessenha;
	}
	public function setDtSenha$value){
		$this->dessenha = $value;
	
	}public function getDtCadstro){
		return $this->dtcastrado;
	}
	public function setIduDtCadstro($value){
		$this->dtcastrado = $value;
	}

	$sql 

}
 ?>
>>>>>>> 294c66d81e198b39691e9a89dc7a2b533a2dac97
