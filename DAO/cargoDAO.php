<?php 
//include '../classes/colaborador.php';

      interface CargoDAO {
	
	public function listar();
	
	public function getBean($id);
	
	public function inserir (Cargo $cargo);
	
	public function alterar (Cargo $cargo);
	
	public function remover ($id);
	
} 
?>