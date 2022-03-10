<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php

$id = $_GET["id"];
$produto = buscaProduto($conexao, $id);

?>
<h1>Formulário de Alteração</h1>
			<form name="cagorias" action="altera-produto.php" method="post">
		<div class="row mt-3">
			<div class="col-md-6">
				Nome: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="nome" value="<?php echo $produto['nome'];?>">
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				Unidade de Medida: 
			</div>
			<div class="col-md-6">
				<input class="form-control" type="text" name="unidade_de_medida" value="<?php echo $produto['unidade_de_medida'];?>">
			</div>
		</div>
	
		<input type="hidden" name="id" value="<?php echo $produto['id'];?>">
		<div class="row mt-3">
			<div class="col-md-12">
				<input class="btn btn-primary" type="submit" name="" value="Alterar">
			</div>
		</div>
		
		
	</form>



<?php include("rodape.php");?>