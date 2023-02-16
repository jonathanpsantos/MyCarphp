<?php 

	include_once 'php_action/conexao_bd.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			<h3 class="light">Carros</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Modelo</th>
					<th>Marca</th>
					<th>Ano</th>
					<th>Valor</th>
				</tr>				
			</	>
			
			<tbody>
				<?php 

					$sql = "SELECT * FROM tbCar";

					$resultado = mysqli_query($connection, $sql);

						
					while($dados = mysqli_fetch_array($resultado)){

					?>				
			
						<tr>
							<td><?php echo $dados['modeloCar']; ?></td>
							<td><?php echo $dados['marcaCar']; ?></td>
							<td><?php echo $dados['anoCar']; ?></td>
							<td><?php echo $dados['valorCar']; ?></td>

							<td><a href="alterar.php?id=<?php echo $dados['codCar']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['codCar']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?php echo $dados['codCar']; ?>" class="modal">
							    <div class="modal-content">
							      <h4>Aviso.</h4>
							      <p>Deseja excluir o Carro?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_carro.php" method="POST">
							      	<input type="hidden" name="codCli" value="<?php echo $dados['codCli']; ?>">

							      	<button type="submit" name="btn-excluir" class="btn red">Excluir</button>

							      	<a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>

							      </form>
							    </div>
							  </div>

						</tr>
						
					<?php }

					?>
					
			</tbody>

			</table>
			<br>
			<a href="cadastrar.php" class="btn">Adicionar Carro</a>
		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>