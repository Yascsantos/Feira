<?php
	//iniciação de sessão para trás o ID para a alteração
	if(!isset($_SESSION))
		{
			session_start();
		}
	
	include_once("../../conexaoBD.php"); //Conectando ao banco
	$tabela="cadastro"; //Tabela no BD
	$campos = "id_user"; //chave primaria 
	
	$edit = $_SESSION['id']; //código e/ou id vindo do formulário anterior 
	
	$pesq = "senha";	//Pesquisa o(s) campo(s) a ser(em) alterado(s) no banco
	
	//busca de valores para alterar 
	$sqlPesq = "SELECT $pesq FROM $tabela WHERE $campos= $edit";
	
	//executa, testa e encerra conexão
	$pesquisa = mysqli_query($conexao,$sqlPesq);
	if (!$pesquisa) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
		} 
	
	//se o botão for pressionado
	if (isset($_GET['alterar'])) 
	{

		//traz as variáveis do formulário
		$codigo = $_SESSION['id'];
		$senha = $_GET['senha'];
		
		//Script para atualizar um registro na tabela no Banco de Dados
		$sql = "UPDATE $tabela SET 
			senha = '$senha'
			WHERE $campos = $codigo";
			
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) {
			die(' Query Inválida: ' . mysqli_error($conexao));
	
		} else {
			mysqli_close($conexao);
			echo "Senha alterado com sucesso";
			echo "<br/><a href='../perfil.php'>Voltar</a><br/>";

			exit;
		}
	}

?>

<!DOCTYPE html>
<html>
	
	<head>
		<title>Editar telefone</title>
		<meta charset="utf-8" />
		   <link rel="icon" type="imagem/png" href="../Descrição/imgs/icon.png" />
    <link rel="stylesheet" href="form.css">
	</head>
	<body>
		<h2><b>ALTERAÇÃO DO SENHA DO USUÁRIO</b></h2> <br>
		<div class="form">
		
		<!-- formulário alteração -->
		<form action="" method="GET">
			<!-- input oculto que traz do formulário anterior o código do produto -->
			<input type="hidden" name="" value="<?= $edit; ?>" />


        <!--preço-->
			<span>Nova senha: </span>
			<input type="text"  name="senha" /><br/>


			<input type="submit" name="alterar" value="Alterar" />
		</form>
		</div>
	</body>
</html>


