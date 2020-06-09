<?php 
include './DAO/colaboradorDAOImpl.php';
include './DAO/cargoDAOImpl.php';
require './conexao/conexao.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/dgb.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>
<?php
	$colaboradorDAO = new ColaboradorDAOImpl();
	$colaboradorDAO->listar();

	$cargoDAO = new CargoDAOImpl();
?>
<body>

<div class="card" style="width: 100%;">
  <div class="card-header">
  <h2>Colaboradores Cadastrados
	 <div align="">
		  <a href='front/frmColaborador.php'> <button type="button" class="btn btn-outline-success btn-sm" value='inserir'>Cadastrar Colaborador</button> </a>
		  <a href='front/grafico.php'>  <button type="button" class="btn btn-outline-success btn-sm" value='grafico'>Grafico</button> </a>
		  <a href='front/frmCargo.php'><button type="button" class="btn btn-outline-success btn-sm" value='cadastrar_cargo'>Cadastrar Cargo</button></a>
	 </div>		 		
</h2>
<form id="filtroPesquisa" action="front/resultadoPesquisa.php" name="filtroPesquisa" method="post"> 
			<div style="float: right">
				<label>Filtrar por &nbsp;</label>
				<select id="filtro" name="filtro" class="custom-select">
					<option value="1">Nome</option>
					<option value="2">Telefone</option>
					<option value="3">E-mail</option>
					<option value="4">Empresa</option>
					<option value="5">Setor</option>
					<option value="6">Cargo</option>
				</select>		
				<input type="text" class="form-control" name="pesquisa" id="pesquisa">
				<button type="submit" value="pesquisar" placeholder="pesquisar...">Pesquisar</button>

			 </div>
</form>
  </div>
  <table>
	<thead>
		  <tr>
		    <th>Nome</th>
		    <th>Email</th>
		    <th>Telefone</th>
		    <th>Empresa</th>
		    <th>Setor</th>
		    <th>Cargo</th>
		     <th>Acoes</th>
		  </tr>
	</thead>
	<tbody>
		<?php foreach ($colaboradorDAO->listar() as $key => $colaborador) {
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
				echo "<a href='front/frmEditarColaborador.php?id=".$colaborador["codigo"]."'>  <button type='button' class='btn btn-outline-warning btn-sm' value='editar'>Editar</button></a>&nbsp;";
				echo "<a href='front/removerColaborador.php?id=".$colaborador["codigo"]."'>  <button type='button' class='btn btn-outline-danger btn-sm' value='Remover'>Remover</button></a>&nbsp;";
				echo "</td>";

			echo "</tr>";			
	
		}?>
</tbody>
 </table>
</div>





</body>
<script src="./js/acoes.js"></script>
</html>