<?php 
//include '../classes/colaborador.php';

      interface ColaboradorDAO {
	
	public function listar();
	
	public function getBean($id);
	
	public function getBeanByEmail($email);
	
	public function getBeanByName($nome);
	
	public function inserir (Colaborador $colaborador);
	
	public function alterar (Colaborador $colaborador);
	
	public function remover ($id);

	public function filtrarbyName($nome);
	public function filtrarbyTelefone($telefone);
	public function filtrarbyEmail($email);
	public function filtrarbyEmpresa($empresa);
	public function filtrarbyCargo($cargo);
	public function filtrarbySetor($setor);
	
} 
?>