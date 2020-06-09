<html>
<head>
<?php
require '../conexao/conexao.php';
include '../DAO/cargoDAOImpl.php';?>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/dgb.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<?php 

$cargoDAO = new CargoDAOImpl();?>

<form action="salvar_cargo.php" name="cadastrar_cargo" method="post">
  <div class="form-group">
    <label for="descricao">Descricao:</label><br>
      <input type="text" class="form-control" id="descricao" name="descricao" aria-describedby="" placeholder="Descricao...">   
    </div>

  <button type="submit" class="btn btn-outline-success" onclick="return validarCampos();" value="salvar" id="salvar">salvar</button>
  <button type="button" class="btn btn-outline-warning"  onclick="window.history.go(-1); return false;"  type="submit" value="voltar">Voltar</button>

</form>

<script src="../js/acoes.js"></script>

</html>