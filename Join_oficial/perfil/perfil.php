
<?php
	if(!isset($_SESSION))
    {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
</head>
<body>
    <?php
	//Conectando ao banco
	include_once("../conexaoBD.php");
	//Tabela no BD
	$tabela="cadastro";
    $campo= "id_user";
	$id= $_SESSION['id'];
	//Script de uma busca em uma tabela no Banco de Dados
	$sql = "select * from $tabela where $campo ='$id'";
	
	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql);

	//$registro = mysqli_fetch_array($instrucao);


	foreach ($instrucao as $exibe)
	{
		
		echo "<h1> Perfil do usuário</h1>";
		echo "Seja bem-vindo ao seu perfil, <b>".$exibe['nome']."</b>";
		echo "<h3> Seus dados </h3>";
		echo "<table> 
			<th>Nome: </th>
			<th>".$exibe['nome']."</th>
			<th></th> <th></th>
			<td align='center'><a href='../perfil/updates/nome.php?&id_user=".$exibe['id_user']."'>Alterar</a></td>
			</table>";

		echo "<table> 
		<th>E-mail: </th>
		<th>".$exibe['email']."</th>
		<th></th> <th></th>
		<td align='center'><a href='../perfil/updates/email.php?&id_user=".$exibe['id_user']."'>Alterar</a></td>
		</table>";

		echo "<table> 
		<th>Telefone: </th>
		<th>".$exibe['telefone']."</th>
		<th></th> <th></th>
		<td align='center'><a href='../perfil/updates/tel.php?&id_user=".$exibe['id_user']."'>Alterar</a></td>
		</table>";

		echo "<table> 
		<th>Senha: </th>
		<th>".$exibe['senha']."</th>
		<th></th> <th></th>
		<td align='center'><a href='../perfil/updates/senha.php?&id_user=".$exibe['id_user']."'>Alterar</a></td>
		</table>
		<br>";

		echo "<table> 
		<th>Imagem de perfil: </th>
		<th><img src=".$exibe['img']."width='350px' height='350px'/></th>
		<th></th> <th></th>
		<td align='center'><a href='../perfil/updates/img.php?&id_user=".$exibe['id_user']."'>Alterar</a></td>
		</table>
		<br>";
 

		
		/*echo"<a href='./img/abacaxi.jpg'> 01 </a> <br>";
		echo"<a href='/img/abacaxi.jpg'> 02 </a> <br> <br>";
		echo $exibe['img'];
		<th><img src='".$registro['img']."width='350px' height='350px'/></th>
		th><img src='../Cadastro/imgs/perfil.png' width='350px' height='350px'/></th>

		*/


		/*echo "<table> 
		<th>Selecione sua imagem de perfil: </th>
		<th></th> <th></th>
		<td align='center'><a href='../perfil/upload_img.php?&id_user=".$exibe['id_user']."'>Selecionar</a></td>
		</table>
		<br>";*/

		



		echo "<h3> Suas compras </h3>";
		echo "<i> Não possui nenhum(a) no momento <i>";

		echo "<h3> Suas doações </h3>";
		echo "<i> Não possui nenhum(a) no momento </i>";

		echo "<h3> Seus afilhados </h3>";
		echo "<i> Não possui nenhum(a) no momento </i>";
  



	}
	mysqli_close($conexao);

    ?>
</body>
</html>