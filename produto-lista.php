<?php include("cabecalho.php");?>
<?php include("conecta.php");?>
<?php include("banco-produto.php");?>
<?php  

	$produto = listaProduto($conexao);
?>
	<h1>Listagem de Produtos</h1>
	
	<?php
		if(array_key_exists("removido", $_GET) && $_GET["removido"] == 'true'){
			?>
			<p class="alert alert-success">Produto removido com sucesso!</p>
			<?php
		}


	?>
	<table class="table table-striped table-bordered mt-5">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nome</b></td>
			<td><b>Unidade de Medida</b></td>
			<td><b>Remover</b></td>
			<td><b>Editar</b></td>
		</tr>
<?php
	foreach($produto as $produtos){
		?>
		<tr>
			<td><?php echo $produtos["id"];?></td>
			<td><?php echo /*utf8_encode(*/$produtos["nome"]/*)*/;?></td>
			<td><?php echo /*utf8_encode(*/$produtos["unidade_de_medida"]/*)*/;?></td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?php echo $produtos["id"];?>">
					<button class="btn btn-danger" >remover</button>
				</form>
				
			</td>
			<td>
				<a href="produto-altera-formulario.php?id=<?php echo $produtos["id"];?>" class="btn btn-info">alterar</a>
			</td>
		</tr>
		<?php
	}
	?>
	</table>
<?php include("rodape.php");?>	