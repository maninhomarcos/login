<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
<h2>Formulario alunos marta</h2>


<form>
  <div class="mb-3">
    <label for="usuario" class="form-label">usuario</label>
    <div class="col-sm-10">
    <input type="text"  name="usuario"   >
  </div>

  <div class="mb-3">
    <label for="senha" class="form-label">senha</label>
    <div class="col-sm-10">
    <input type="text"  name="senha" id="exampleInputPassword1">
  </div>

  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <div class="col-sm-10">
  <div class="mb-3">

  </div>
</form>


<div id="nex">
<?php

include 'conexao.php';


$nome =$_POST["usuario"];
$senha =$_POST["senha"];


$sql = "SELECT * FROM estudantes WHERE usuario='$usuario'
and senha = '$senha'"; 
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  echo "login efetuado" ;
} else {
  echo "erro";
}

?>

</body>
</html>