<!DOCTYPE html>
<html lang="en">
    <html lang="pt-br">
<head>
    <link rel="icon" type="imagem/png" href="imgs/icon.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>Pedido| Join in the Spoon</title>
    <link rel="stylesheet" href="../Cone/css/form.css" type="text/css">
</head> 
<body>
   
<header id="menu">

       
      <nav >
        <div class="logo"><img src="imgs/logo.png"  ></div>
        
        <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                   
                  </div>

      
        <ul class="nav-list">
        <li><a href="../../../index/index.php">INICIO</a></li>
            <li><a href="../../../contato/contato.html">CONTATO</a></li>
            <li><a href="../../../sobre_nos/sobre.php">SOBRE NÓS</a></li>
            <li><a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDEREÇO</a></li>
            <li><a href="../../../logout.php">SAIR</a></li>
      
         
        </ul>

       </nav>

</header>

<center>

    <h2>Faça seu Pedido </h2>
    <div class="form">
        
	<form action="bolo.php" method="GET">
        
        <span><b>Escolha o produto: </b></span> <br> 
       <?= include ("tab_bolo.php");?>
        <br> 
        <br> <br>
        <input type="submit" name="finalizar" value="Finalizar" />
	</form>
           
        <!--Voltar para o index-->
        <br>
        
        
</div>
        </center>
        <script src="../../../index/js/mobile-navbar.js"></script>
</body>
</html>