<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>

<?php
	$produtos = listaProduto($conexao);
	?>
	<h1>Formulário de Cadastro</h1>

	<form name="produtos" action="adiciona-produto.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Nome: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nome">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Unidade de Medida: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="unidade_de_medida">
			</div>
		</div>
<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Cadastrar">
			</div>
		</div>
	</form>

<?php include("rodape.php");?>	