<?php 
include '../DAO/colaboradorDAOImpl.php';
require '../conexao/conexao.php';
require '../classes/colaborador.php';


$idcolaborador =  $_GET["id"];

$colaboradorDAO = new ColaboradorDAOImpl();
$colaboradorDAO->remover($idcolaborador);


if(!empty($colaboradorDAO)){
	echo "<script>alert('Colaborador removido com sucesso');
			window.location.href = '../index.php';
	     </script>";
	
}else{
	echo "Erro ao deletar  colaborador";
}



?>