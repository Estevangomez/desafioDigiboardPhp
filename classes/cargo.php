<?php 

/**
 * 
 */   
class Colaborador 
{
	private $id;
	private $descricao;



	
	/*public function __construct($nome,$telefone,$empresa,$setor,$email,$cargo){
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setEmpresa($empresa);
		$this->setSetor($setor);
		$this->setEmail($email);
		$this->setCargo($cargo);

	}*/

	public function getId() {
		return $this->id;
	}

	public function setId($id){
		return $this->id = $id;
	}

	public function getDescricao() {
		return $this->descricao;
	}

	public function setDescricao($d){
		return $this->descricao = $e;
	}

	

}





?>