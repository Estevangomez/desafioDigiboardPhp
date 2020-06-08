<html>
<head>
<?php 
include '../DAO/colaboradorDAOImpl.php';
include '../DAO/cargoDAOImpl.php';
require '../conexao/conexao.php';
$cargoDAO = new CargoDAOImpl();

$sqlCountC = 'SELECT COUNT(*) as qtd FROM colaborador';
$sqlCountC = Conexao::getConn()->prepare($sqlCountC);
$sqlCountC->execute();
$resultCountC = $sqlCountC->fetchAll(PDO::FETCH_ASSOC);

$totalColaboradores =  $resultCountC[0]["qtd"];


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	Quantidade de colaboradores por cargo</title>
<link href="../css/dgb.css" rel="stylesheet" type="text/css" />
</head>
  
 <body>

   <div class="base_graf_Em_Busca">
   		<h1> Quantidade de colaboradores por cargo </h1>
   		<h4> Total de Colaboradores : <?php echo $totalColaboradores; ?> </h4>
   	<?php 
   	foreach ($cargoDAO->listar() as $key => $cargo) {
		$sql = 'SELECT COUNT(*) AS cargo FROM colaborador WHERE id_cargo = ? ';
	
			$stmt = Conexao::getConn()->prepare($sql);
			$stmt->bindValue(1,$cargo["codigo"]);
			$stmt->execute();
			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$vetor = array('cargo' =>$cargo["descricao"],
							'qtd'=> $resultado[0]["cargo"]);

			$totalColaboradores =  $resultCountC[0]["qtd"];

			$porcentagem = ($vetor["qtd"]/$totalColaboradores)*100;

			
			?>
			<div class='Busca_valor'><div class='insert_busca_width' style='width: <?php echo $vetor["qtd"]?>%;'><?php echo $vetor["qtd"]; echo "&nbsp&nbsp"; echo $vetor["cargo"]; echo "&nbsp&nbsp"; echo $porcentagem,"%"?>&nbsp;</div></div>
			
<?php

}


   	?>

   </div>
    <input  onclick="window.history.go(-1); return false;"  type="submit" value="voltar" />
 </body>
</html>
