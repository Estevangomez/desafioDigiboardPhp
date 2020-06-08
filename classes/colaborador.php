<?php 

/**
 * 
 */   
class Colaborador 
{
	private $id;
	private $nome;
	private $telefone;
	private $empresa;
	private $setor;
	private $email;
	private $cargo;


	
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

	public function getNome() {
		return $this->nome;
	}

	public function setNome($e){
		return $this->nome = $e;
	}

	public function getTelefone() {
		return $this->telefone;
	}

	public function setTelefone($t){
		return $this->telefone = $t;
	}

	public function getEmpresa() {
		return $this->empresa;
	}

	public function setEmpresa($e){
		return $this->empresa = $e;
	}

	public function getSetor() {
		return $this->setor;
	}

	public function setSetor($s){
		return $this->setor = $s;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($e){
		return $this->email = $e;
	}

	public function getCargo() {
		return $this->cargo;
	}

	public function setCargo($c){
		return $this->cargo = $c;
	}

}





?>