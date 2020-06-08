<?php 
include 'cargoDAO.php';

class CargoDAOImpl implements CargoDAO{


public function inserir($c){

			try {
				$sql = 'INSERT INTO cargo (descricao) VALUES (?)';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindValue(1,$c->getDescricao());
				
				$stmt->execute();

				$valor = 1;
				return $valor;
		} catch(PDOException $e) {
		  echo 'Error: ' . $e->getMessage();

		}


}

	public function alterar($c){

			try {
				$sql='UPDATE cargo SET descricao = ? WHERE codigo = ?';
					$stmt = Conexao::getConn()->prepare($sql);
				    $stmt->bindValue(1,$c->getDescricao());				   
				    $stmt->bindValue(2,$c->getId());
				    $stmt->execute();

				  
			} catch(PDOException $e) {
			echo 'Error: ' . $e->getMessage();

			}


	}

public function remover($c){

		try {

				$sql = 'DELETE FROM cargo WHERE codigo = ?';
				$stmt = Conexao::getConn()->prepare($sql);
				$stmt->bindValue(1,$c);
				$stmt->execute();

			  
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();

	}


}




	public function getBean($id){

			try {

				$sql = 'SELECT * FROM cargo WHERE codigo = ?';
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
				$sql = 'SELECT * FROM cargo';
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


}



?>