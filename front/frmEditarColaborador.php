<?php
include '../DAO/colaboradorDAOImpl.php';
include '../DAO/cargoDAOImpl.php';
require '../conexao/conexao.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/dgb.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<?php
$idcolaborador =  $_GET["id"];

$colaboradorDAO = new ColaboradorDAOImpl();
$cargoDAO = new CargoDAOImpl();
$colaboradorDAO->getBean($idcolaborador);?>
<body>
<?php
foreach ($colaboradorDAO->getBean($idcolaborador) as $key => $colaborador) {
echo "<form action='salvar_edicao_colaborador.php' method='post'>";
echo " <input type='hidden' class='form-control' id='id' name='id' value='".$colaborador["codigo"]."' ><br>";

echo " <label for='nome'>Nome:</label><br>";
echo " <input type='text' class='form-control' id='nome' name='nome' value='".$colaborador["nome"]."'><br> ";

echo "<label for='email'>Email:</label><br>";
echo "<input type='text' class='form-control' id='email' name='email' value='".$colaborador["email"]."'><br>";

echo "<label for='telefone'>Telefone:</label><br>";
echo "<input type='text' class='form-control' id='telefone' name='telefone' value='".$colaborador["telefone"]."'><br>";

echo "<label for='empresa'>Empresa:</label><br>";
echo "<input type='text' class='form-control' id='empresa' name='empresa' value='".$colaborador["empresa"]."'><br>";

echo "<label for='cargo'>Cargo:</label><br>";
echo "<select id='cargo' name='cargo' class='custom-select'>";
 foreach ($cargoDAO->listar() as $key => $value) {
        echo  "<option value='".$value["codigo"]."'> ".$value["descricao"]." </option> ";
  }
echo "</select><br>";
echo "<label for='setor'>Setor:</label><br>";
echo "<input type='text' class='form-control' id='setor' name='setor' value='".$colaborador["setor"]."'><br>";

echo "<br>";

echo "<button type='submit' class='btn btn-outline-success btn-sm' value='salvar' id='salvar'>Atualizar</button>";
echo " <button type='button' class='btn btn-outline-warning btn-sm'  onclick='window.history.go(-1); return false;'  type='submit' value='voltar'>Voltar</button> ";

echo "</form>";



}

?>
</body>
<script src="../js/acoes.js"></script>
</html>