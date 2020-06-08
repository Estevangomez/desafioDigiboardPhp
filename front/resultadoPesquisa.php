<?php 
include '../DAO/colaboradorDAOImpl.php';
include '../DAO/cargoDAOImpl.php';
require '../conexao/conexao.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/dgb.css">
	</head>
<?php
	$filtro =  $_POST["filtro"];
	$pesquisa = $_POST["pesquisa"];
	
	$colaboradorDAO = new ColaboradorDAOImpl();	


	$cargoDAO = new CargoDAOImpl();	
?>
<body>
<h2>Colaboradores Cadastrados
			
</h2>

<table>
	<thead>
		  <tr>
		    <th>Nome</th>
		    <th>Email</th>
		    <th>Telefone</th>
		    <th>Empresa</th>
		    <th>Setor</th>
		    <th>Cargo</th>
		     <th>Ações</th>
		  </tr>
	</thead>
	<tbody>
		<?php
		switch ($filtro) {
			case '1':
			echo "Filtrar por nome = ",$pesquisa;
				foreach ($colaboradorDAO->filtrarbyName($pesquisa) as $key => $colaborador) {
				echo "<tr>"; 
					echo "<td>";
					echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
					echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
					echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
					echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
					echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}
				break;

				case '2':
				echo "Filtrar Por Telefone ",$pesquisa;
				foreach ($colaboradorDAO->filtrarbyTelefone($pesquisa) as $key => $colaborador) {
			echo "<tr>"; 
				echo "<td>";
				echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}
					break;

				case '3':
				echo "Filtrar por E-mail ",$pesquisa;
			foreach ($colaboradorDAO->filtrarbyEmail($pesquisa) as $key => $colaborador) {
				echo "<tr>"; 
				echo "<td>";
				echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}
					break;

					case '4':
			echo "Filtrar por Empresa ",$pesquisa;
			foreach ($colaboradorDAO->filtrarbyEmpresa($pesquisa) as $key => $colaborador) {
				echo "<tr>"; 
				echo "<td>";
				echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}
					break;

			case '5':
			echo "Filtrar por Setor ",$pesquisa;
			foreach ($colaboradorDAO->filtrarbySetor($pesquisa) as $key => $colaborador) {
				echo "<tr>"; 
				echo "<td>";
				echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}
					break;
					case '6':
			echo "Filtrar por Cargo ",$pesquisa;

				foreach ($colaboradorDAO->filtrarbyCargo($pesquisa) as $key => $cargo) {
					$stmt = 'SELECT * FROM colaborador WHERE id_cargo =:cargo';
					$stmt = Conexao::getConn()->prepare($stmt);
					$stmt->bindParam(':cargo',$cargo["codigo"]);
					$stmt->execute();

					$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

					foreach ($resultado  as $key => $colaborador) {
				echo "<tr>"; 
				echo "<td>";
				echo $colaborador["nome"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["email"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["telefone"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["empresa"];
				echo "</td>";

				echo "<td>";
				echo $colaborador["setor"];
				echo "</td>";

				echo "<td>";
				foreach ($cargoDAO->getBean($colaborador["id_cargo"]) as $key => $value) {
					echo $value["descricao"];
				}				
				echo "</td>";

				echo "<td id='".$colaborador["codigo"]."'>";
				echo "<a href='frmEditarColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='removerColaborador.php?id=".$colaborador["codigo"]."'><button type='btn' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

		    	echo "</tr>";


					}
					
				}
			break;
					
			
		}
		 ?>
</tbody>
 </table>
 <br>
  <input  onclick="window.history.go(-1); return false;"  type="submit" value="voltar" />
</body>
<script src="../js/acoes.js"></script>
</html>