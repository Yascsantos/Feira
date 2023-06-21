<?php
    //Conectando ao banco
	include_once('../conexaoBD.php');
	//Tabela no BD
	$tabela="cadastro";
	//define campos do insert
	$campos = "img";
	$id_user= "id_user";

	//define o diretorio para envio de arquivos
	$diretorio = "img/"; 

	if(isset($_POST['enviar']))
	{
		//pegando o arquivo, com o nome original dele 
		$arq= $_FILES['arquivo']["name"];

		$arquivo = $diretorio.$arq; //arquivo = pasta+nome do arquivo 
		move_uploaded_file($_FILES['arquivo']["tmp_name"], $arquivo); //mover o arquivo/img para outro destino 

		//Script para inserir o caminho do arquivo ao BD
		$sql = "INSERT INTO $tabela ($campos)
		VALUES ('$arquivo') ";
		
		
		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
		//concluindo operação
		if (!$instrucao) 
		{
			die(' Query Inválida: ' . mysqli_error($conexao));
			echo 'Falha ao enviar arquivo!';
		} 
		else 
		{
			echo "efutado com sucesso";
			mysqli_close($conexao);
			exit;
			
		}	
		}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
		<form action="" method="POST" enctype="multipart/form-data">
			<label>Selecione uma imagem de perfil: <br />
			<input type="file" name="arquivo" size="45" /></label> <br />
			<input type="submit" value="Enviar" name="enviar">
			<input type="reset" value="Apagar">
		</form>
	</body>
</html>