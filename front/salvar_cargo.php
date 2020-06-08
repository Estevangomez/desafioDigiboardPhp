<?php 
include '../DAO/cargoDAOImpl.php';
require '../classes/cargo.php';
require '../conexao/conexao.php';


$cargo = new Cargo();

$cargo->setDescricao($_POST["descricao"]);

$cargoDAO = new CargoDAOImpl();
$cargoDAO->inserir($cargo);


if(!empty($cargoDAO)){
	echo "<script>alert('Cargo inserido com sucesso');
			window.location.href = '../index.php';
	     </script>";

}else{
	echo "Erro ao cadastrar novo Cargo";
}



?>