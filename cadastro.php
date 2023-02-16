<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo Carro</h3>
			
			<form action="php_action/criar_clientes.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="modelo" id="modelo">
					<label for="modelo">Modelo</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca">
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="ano" id="ano">
					<label for="ano">Ano</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="valor" id="valor">
					<label for="valor">Valor</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de Carros</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>