<?php 
include '../DAO/colaboradorDAOImpl.php';
require '../classes/colaborador.php';
require '../conexao/conexao.php';


$colaborador = new Colaborador();

$colaborador->setNome($_POST["nome"]);
$colaborador->setEmail($_POST["email"]);
$colaborador->setEmpresa($_POST["empresa"]);
$colaborador->setSetor($_POST["setor"]);
$colaborador->setTelefone($_POST["telefone"]);
$colaborador->setCargo($_POST["cargo"]);

$colaboradorDAO = new ColaboradorDAOImpl();
$colaboradorDAO->inserir($colaborador);


if(!empty($colaboradorDAO)){
	echo "<script>alert('Colaborador inserido com sucesso');
			window.location.href = '../index.php';
	     </script>";

}else{
	echo "Erro ao cadastrar novo colaborador";
}



?>