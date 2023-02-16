<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$modelo = mysqli_escape_string($connection,$_POST['modelo']);
		$marca = mysqli_escape_string($connection,$_POST['marca']);
		$ano	 = mysqli_escape_string($connection,$_POST['ano']);
		$valor = mysqli_escape_string($connection,$_POST['valor']);

		$sql = "INSERT INTO tbCar(modeloCar,marcaCar,anoCar,valorCar)VALUES('$modelo','$marca','$ano','$valor')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
