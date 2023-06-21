<?php
	//Conectando ao banco
	include_once("../../conexaoBD.php");
	//Tabela no BD
	$tabela="sabor";
	
	//Script de uma busca em uma tabela no Banco de Dados
	$sql_code = "select * from $tabela";
	/*$sql_query= $conexao->query($sql_code) or die("Falha na execução do códigdo SQL:". mysqli_error($conexao));
	$teste = $sql_query->fetch_assoc();*/

	// executando instrução SQL
	$instrucao = mysqli_query($conexao,$sql_code);
	echo "<style> 
	   body{
		background-image: url(../Descrição/imgs/fundo.jpg);
		background: cover;
		background-position: 50%  20%;
	   }
	   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

	   * {
	   box-sizing: border-box;
	   font-family: 'Poppins', sans-serif;
	   }
    
   
    a{
    font-family: 'Poppins', sans-serif;
    font-size: 0.9rem;
    font-size: 0.9rem;
    font-weight:600;
    color:#333235;
    }
    
    
    a:hover{
    color:#33323591;
    }
    
    .form{
    background-color: rgba(255, 255, 255, 0.4);
    backdrop-filter: blur(40px);
    padding: 30px 40px;
    width: 50%;
    border-radius:20px ;
    top:auto;
    
    }
    h2{
    font-size: 30px;
    text-align: center;
    }
	tr td th{
		margin: 5px;
		border: 2px;
		padding: 5px;
		
	}
	   </style>";
	echo "<body>";
	echo"<br><br><br><br><br><br><br><br><br><br><br>";
	echo "<center>";
	echo "<div class='form'";

    //Retorna uma matriz associativa dos dados
	echo "<br/><a href='../index.html'>Voltar</a><br>";
	echo "<h3>Lista de Sabores</h3>";
	//gera uma tabela pela tag table
    echo"
    <table>
	<tr>
	<th>Código</th>
	<th>Nome</th>
	<th>Deletar</th>
    </tr>";
    foreach ($instrucao as $exibe) 
	{
	echo "<tr>
	<td align='center'>".$exibe['id_s']."</td>
	<td align='center'>".$exibe['nome']."</td>
	<td align='center'><a href='remov_sab.php?&codigo=".$exibe['id_s']."'>Deletar</a></td>
    </tr>";
    }
    echo "</table>";
	echo "<br> <br>";
	echo "</div>";
	echo "</center>";
	echo "</body>";
	mysqli_close($conexao);
?>