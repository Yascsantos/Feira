<?php
	//parametros
	$servidor = "localhost";
	$baseDados = "doceria";
	$usuario = "root";
	$senha = ""; //senha do lab 8= 12345678
	
	//criando conexao
	$conexao = mysqli_connect($servidor, $usuario, $senha, $baseDados); //conexão com o banco
	
	//checando conexao
	if (!$conexao){
		die ("Não foi possivel efetuar a conexão".mysqli_connect_error());
	}
	else{
		//echo "Conexão efetuada <br>";
		//mysqli_close($conexao);
	}
?>