<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbClientes WHERE codCli = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Carros</h3>
			
			<form action="php_action/alterar_carros.php" method="POST">

				<input type="hidden" name = "codCar" value="<?php echo $dados['codCar']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="modelo" id="modelo" value="<?php echo $dados['modeloCar']; ?>">
					<label for="modelo">Modelo</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="marca" id="marca" value="<?php echo $dados['marcaCar']; ?>"
					>
					<label for="marca">Marca</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="ano" id="ano" value="<?php echo $dados['anoCar']; ?>">
					<label for="ano">Ano</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="valor" id="valor" value="<?php echo $dados['valorCar']; ?>">
					<label for="valor">Valor</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de Carros</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>