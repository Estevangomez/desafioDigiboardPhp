<?php 
include '../DAO/colaboradorDAOImpl.php';
require '../conexao/conexao.php';
require '../classes/colaborador.php';


$colaborador = new Colaborador();

$colaborador->setNome($_POST["nome"]);
$colaborador->setEmail($_POST["email"]);
$colaborador->setEmpresa($_POST["empresa"]);
$colaborador->setSetor($_POST["setor"]);
$colaborador->setTelefone($_POST["telefone"]);
$colaborador->setCargo($_POST["cargo"]);
$colaborador->setId($_POST["id"]);

$colaboradorDAO = new ColaboradorDAOImpl();
$colaboradorDAO->alterar($colaborador);


if(!empty($colaboradorDAO)){
	echo "<script>alert('Dados do colaborador com sucesso');
			window.location.href = '../index.php';
	     </script>";
	
}else{
	echo "Erro ao atualizar colaborador";
}



?>