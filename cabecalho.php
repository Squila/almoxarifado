<!DOCTYPE html>
<?php
error_reporting(0);
ini_set("display_errors", 0 );
?>
<?php include("conecta.php");?>
<?php include("logica-usuario.php");?>
<?php
$user_logado = usuarioLogado();
$user_resultado = mysqli_query($conexao, "select * from usuarios where usuario = '{$user_logado}'");
$user = mysqli_fetch_assoc($user_resultado);
?>
<html>
<head>
  <title>Almoxarifado</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <link rel="shortcut icon" href="img/favicon.ico" />
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">BLIZZARD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="produto-formulario.php">Adiciona Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produto-lista.php">Listar Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
          <?php if(isset($_SESSION["usuario_logado"])){?>
          </ul>
        </div>
        <ul class="nav justify-content-end">
          <!-- Default dropleft button -->
          <div class="btn-group dropleft">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $user["nome"]; ?>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="usuario-altera-formulario.php?id=<?php echo $usuario["id"];?>">Alterar</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Sair</a>
            </div>
          </div>
          <div class="dropdown-menu">
            <!-- Dropdown menu links -->
          </div>
        </div>
        <?php
      }
      ?>
    </nav>
    <div class="container">
      <div class="principal">