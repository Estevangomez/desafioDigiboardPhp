<?php 
include 'colaboradorDAO.php';

class ColaboradorDAOImpl implements ColaboradorDAO{



public function inserir(Colaborador $c){

			try {
				$sql = 'INSERT INTO colaborador (nome,telefone,id_cargo,setor,empresa,email) VALUES (?,?,?,?,?,?)';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindValue(1,$c->getNome());
				$stmt->bindValue(2,$c->getTelefone());
				$stmt->bindValue(3,$c->getCargo());
				$stmt->bindValue(4,$c->getSetor());
				$stmt->bindValue(5,$c->getEmpresa());
				$stmt->bindValue(6,$c->getEmail());
				   
				$stmt->execute();

				$valor = 1;
				return $valor;
		} catch(PDOException $e) {
		  echo 'Error: ' . $e->getMessage();

		}


}

	public function alterar(Colaborador $c){

			try {
				$sql='UPDATE colaborador SET nome = ?,telefone = ?, email = ?, empresa = ?, setor = ?,id_cargo = ? WHERE codigo = ?';
					$stmt = Conexao::getConn()->prepare($sql);
				    $stmt->bindValue(1,$c->getNome());
				    $stmt->bindValue(2,$c->getTelefone());
				    $stmt->bindValue(3,$c->getEmail());
				    $stmt->bindValue(4,$c->getEmpresa());
				    $stmt->bindValue(5,$c->getSetor());
				    $stmt->bindValue(6,$c->getCargo());
				    $stmt->bindValue(7,$c->getId());

				    $stmt->execute();

				  
			} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();

			}


	}

public function remover($c){

		try {

				$sql = 'DELETE FROM colaborador WHERE codigo = ?';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindValue(1,$c);
				$stmt->execute();

			  
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();

	}


}


public function getBeanByName($nome){

		try {

			  
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();

	}


}

public function getBeanByEmail($email){

		try {

			  
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();

	}


}

	public function getBean($id){

			try {

				$sql = 'SELECT * FROM colaborador WHERE codigo = ?';
					$stmt = Conexao::getConn()->prepare($sql);
					$stmt->bindValue(1,$id);
					$stmt->execute();

					if($stmt->rowCount() > 0):
						$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
					else:
						return [];
					endif;
				  
		} catch(PDOException $e) {
		  echo 'Error: ' . $e->getMessage();

		}


	}

	public function listar(){

			try {
				$sql = 'SELECT * FROM colaborador';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbyName($nome){
		$name = "$nome%";

			try {
				$sql = 'SELECT * FROM colaborador WHERE nome like :nome ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':nome',$name);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbyTelefone($telefone){
			$tel = "$telefone%";
			try {
				$sql = 'SELECT * FROM colaborador WHERE telefone like :telefone ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':telefone',$tel);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbyEmail($email){
			$em = "$email%";
			try {
				$sql = 'SELECT * FROM colaborador WHERE email like :email ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':email',$em);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbyEmpresa($empresa){
			$emp = "$empresa%";
			try {
				$sql = 'SELECT * FROM colaborador WHERE empresa like :empresa ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':empresa',$emp);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbyCargo($cargo){
			$c ="$cargo%";
			try {
				$sql = 'SELECT * FROM cargo WHERE descricao like :cargo ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':cargo',$c);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}

	public function filtrarbySetor($setor){
			$s = "$setor%";
			try {
				$sql = 'SELECT * FROM colaborador WHERE setor like :setor ';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindParam(':setor',$s);
				$stmt->execute();

				if($stmt->rowCount() > 0):
					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
					return $resultado;
				else:
					return [];
				endif;
				  
			} catch(PDOException $e) {
			  echo 'Error: ' . $e->getMessage();

			}
	}




}



?>