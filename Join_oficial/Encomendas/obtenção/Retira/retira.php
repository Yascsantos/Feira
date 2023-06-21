<?php
	//Conectando ao banco
	include_once("../../../conexaoBD.php");
	//Tabela no BD
	$tabela="retirada";
	//define campos do insert
	$campos = "data_retirada, hora";
	
	//se o botão for pressionado
	if (isset($_GET['finalizar'])) {
		//traz as variáveis do formulário
		$data = $_GET['data'];
		$hora = $_GET['hora'];
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$data','$hora')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			header("Location: ../../Pagamento/pag.php");
			exit;
		}
	}	
?>