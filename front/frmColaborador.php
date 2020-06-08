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

<form action="salvar_colaborador.php" name="cadastrar_colaborador" method="post">
  <label for="nome">Nome:</label><br>
  <input type="text" id="nome" name="nome"><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>

  <label for="telefone">Telefone:</label><br>
  <input type="text" id="telefone" name="telefone"><br>

   <label for="empresa">Empresa:</label><br>
  <input type="text" id="empresa" name="empresa"><br>

   <label for="cargo">Cargo:</label><br>   
     <select id="cargo" name="cargo">
      <?php foreach ($cargoDAO->listar() as $key => $value) {
        echo  "<option value='".$value["codigo"]."'> ".$value["descricao"]." </option> ";
      } 
        ?>         
      </select><br>

   <label for="setor">Setor:</label><br>
  <input type="text" id="setor" name="setor"><br>
  <br>   

  <button type="submit" onclick="return validarCampos();" value="salvar" id="salvar">salvar</button>
  <input  onclick="window.history.go(-1); return false;"  type="submit" value="voltar" />
</form>

<script src="../js/acoes.js"></script>

</html>