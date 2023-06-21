<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../Descrição/imgs/icon.png" />
    <link rel="stylesheet" href="form.css">
    <title>Descrição do produto</title>
</head>
<body>
<style>
		body{
			background-image: url(imgs/fundo.jpg);
			background: cover;
			background-position: 50%  20%;
		}
	</style>
    <header><br><br><br></header>
    <center><div class="form">
    <tittle><b>CADASTRE A DESCRIÇÃO DO PRODUTO</b></tittle>
    <br>
	<!-- ancoras de navegação -->
    <a href="../index.html">Voltar</a><br/>
	<a href="listagempro.php">Listar Descrições</a><br><br>

	<form action="descrpro.php" method="GET">
	<!--Produto-->  
        <span><b>Produto: </b></span> <br> 
        <?= include ("produtos.php");?>
        <br> 

	<!--Preço--> 
	<span>Preço R$: </span>
	<input type="text" pattern="([0-9]{1,4}.[0-9]{2}$" name="preco"/><br>
        
	<!--Sabor-->
        <span><b>Sabor: </b></span> <br>
        <?= include ("sabores.php");?>
        <br>
        <input type="submit" name="cadastrar" value="Cadastrar"/>
	</form>
</div></center>

</body>
</html>