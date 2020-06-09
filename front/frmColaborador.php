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

<form action="salvar_colaborador.php" name="cadastrar_colaborador" method="post">
  <div class="form-group">
    <label for="nome">Nome do Colaborador</label>
    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="Digite seu Nome..." placeholder="Digite seu Nome...">   
  </div>

  <div class="form-group">
  <label for="email">Email:</label><br>
    <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com">
  </div>

    
  <div class="form-group">
  <label for="telefone">Telefone:</label><br>
    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone">
  </div>

    
  <div class="form-group">
  <label for="empresa">Empresa:</label><br>
    <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa">
  </div>

    
  <div class="form-group">
  <label for="cargo">Cargo:</label><br>
  <select id="cargo" name="cargo" class="custom-select">
      <?php foreach ($cargoDAO->listar() as $key => $value) {
        echo  "<option value='".$value["codigo"]."'> ".$value["descricao"]." </option> ";
      } 
        ?>         
      </select><br>
  </div>
    
  <div class="form-group">
  <label for="email">Setor:</label><br>
    <input type="text" class="form-control" id="setor" name="setor" placeholder="Setor">
  </div>

  <button type="submit" class="btn btn-outline-success" onclick="return validarCampos();" value="salvar" id="salvar">salvar</button>
  <button type="button" class="btn btn-outline-warning"  onclick="window.history.go(-1); return false;"  type="submit" value="voltar">Voltar</button>
</form>
<script src="../js/acoes.js"></script>

</html>