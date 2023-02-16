<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$modelo = mysqli_escape_string($connection,$_POST['modelo']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$ano = mysqli_escape_string($connection,$_POST['ano']);
		$valor = mysqli_escape_string($connection,$_POST['valor']);
		$codCar = mysqli_escape_string($connection,$_POST['codCar']);

		$sql = "UPDATE tbCarros SET modeloCar = '$modelo', marcaCar = '$marca', anoCar = '$ano', valorCar = '$valor' WHERE codCar = '$codCar'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
