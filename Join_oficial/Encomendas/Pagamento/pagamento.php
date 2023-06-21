<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="pagamento";
	//define campos do insert
	$campos = "forma";
	
	//se o botão for pressionado
	if (isset($_GET['finalizar'])) {
		//traz as variáveis do formulário
		$forma = $_GET['forma'];
		//$preco = $_GET['preco'];
		
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "INSERT INTO $tabela ($campos) 
			VALUES ('$forma')";
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			header("Location: ../mensagem.php");
			exit;
		}
	}	
?>