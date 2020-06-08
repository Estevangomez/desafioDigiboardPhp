<html>
<head>
<?php
require '../conexao/conexao.php';
include '../DAO/cargoDAOImpl.php';?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/dgb.css">
</head>

<?php 

$cargoDAO = new CargoDAOImpl();?>

<form action="salvar_cargo.php" name="cadastrar_cargo" method="post">
  <label for="descricao">Descrição:</label><br>
  <input type="text" id="descricao" name="descricao"><br>

  <button type="submit" onclick="return validarCampos();" value="salvar" id="salvar">salvar</button>
  <input  onclick="window.history.go(-1); return false;"  type="submit" value="voltar" />
</form>

<script src="../js/acoes.js"></script>

</html>