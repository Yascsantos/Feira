<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="imagem/png" href="imgs/icon.png" />
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
            <title>Pagamento| Join in the Spoon</title>
            <link rel="stylesheet" href="css/pagamento.css" type="text/css">
</head>

<body>
<header id="menu">
		
			   
                <nav >
                  <div class="logo"><img src="../imgs/logo.png"  ></div>

                <div class="mobile-menu">
                  <div class="line1"></div>
                  <div class="line2"></div>
                  <div class="line3"></div>       
               </div>
          
                  <ul class="nav-list">
                      <li><a href="../../index/index.php">INICIO</a></li>
                      <li><a href="../contato/contato.html">CONTATO</a></li>
                      <li><a href="../sobre_nos/sobre.html">SOBRE NOS</a></li>
                      <li><a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDERECO</a></li>
                      <li><a href="../logout.php">SAIR</a></li>
                
                   
                  </ul>
          
                 </nav>
          </header>
<?php
        include("preço.php");
?>
<?php
        include("tipo_pag.html");
?>
    
    <script src="../../index/js/mobile-navbar.js"></script>
</body>
</html>