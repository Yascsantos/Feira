<?php
	include('../login/protect.php');
?>

<html>
  <head>
  <title>Início| Joy in the spoon</title>
    <link rel="icon" type="imagem/png" href="imagens/icon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css" type="text/css"></head>
  </head>
  <style> 
  @keyframes navLinkFade {
    from {
      opacity: 0;
      transform: translateX(50px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }
  
  .mobile-menu.active .line1 {
    transform: rotate(-45deg) translate(-8px, 8px);
  }
  
  .mobile-menu.active .line2 {
    opacity: 0;
  }
  
  .mobile-menu.active .line3 {
    transform: rotate(45deg) translate(-5px, -7px);
  }
 
  @media (max-width: 1300px){
    .navbar .max-width{
        margin-left: 0;
    }
}



@media (max-width: 999px) {
  body {
    overflow-x: hidden;
  }
  .nav-list {
    position: absolute;
    top: 8vh;
    right: 0;
    width: 50vw;
    height: 92vh;
    background-color:#cbacaad3;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    transform: translateX(100%);
    transition: transform 0.3s ease-in;
  }
  .nav-list li {
    margin-left: 0;
    opacity: 0;
  }
  .mobile-menu {
    display: block;
  }
}

.nav-list.active {
  transform: translateX(0);
}

@keyframes navLinkFade {
  from {
    opacity: 0;
    transform: translateX(50px);
  }
  to {
    opacity: 1;
    transform: translateX(0);
  }
}

.mobile-menu.active .line1 {
  transform: rotate(-45deg) translate(-8px, 8px);
}

.mobile-menu.active .line2 {
  opacity: 0;
}

.mobile-menu.active .line3 {
  transform: rotate(45deg) translate(-5px, -7px);
}
</style>
  <body>
 <header id="menu">
      

        <nav >
          <div class="logo"><img src="imagens/logo.png"  ></div>

          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
           
          </div>
         
       <ul class="nav-list">
       <!--<li><?php echo "Bem-vinda, ".$_SESSION['nome'];?></li>-->
            <li ><a href="../perfil/perfil.php">PERFIL</a></li>
            <li ><a href="../contato/contato.html">CONTATO</a></li>
            <li ><a href="../Encomendas/formulario.php">PEDIDO</a></li>
            <li><a href="https://goo.gl/maps/E9MvDvJCDCmGBeWX7">ENDEREÇO</a></li>
            <li><a href="../sobre_nos/sobre.php">SOBRE NÓS</a></li>
            <li><a href="../logout.php">SAIR</a></li>
   
         </ul>

         </nav>
</header>

            <!--inicio-->
       <section class="inicio" id="inicio">
                    <div class="max-width">
                    <div class="inicio-content">
                    <div class="text-3">Produtos Feitos com <span class="typing"></span></div> 
                    </div>
                    </div>
        </section>

         <!--sessão sobre-->
    <section class="receitas" id="receitas">
      <div class="max-width">
          <div class="receitas-content">
              <div class="column left">
                <img src="imagens/sobre1.jpg"  >
              </div>
              <div class="column right">
                  <div class="text-3"><span class="typing-2"></span></div>
                  <p> Produzidos pela Dona Maria uma senhora que já sofreu muito em sua vida e que agora só quer vender felicidade. Nossos doces são feitos com muito amor e carinho e vão te trazer um gostinho de quero mais.</p>
                      
              </div>
          </div>
      </div>
  </section>
  <section class="produto" id="produto">

<div class="max-width">
              <h2 class="title">Produtos</h2>
            <div class="carousel owl-carousel ">
                <div class="card">
                    <div class="box">
                      <a href="formulario.php"><img src="imagens/p1.jpg"></a>
                     
                        <a href="../Encomendas/Produtos/Cone/form_cone.php"> <p>Cone Trufado</p></a>
                    </div>
                </div>
                <div class="card">
                  <div class="box">
                      <img src="imagens/p2.jpg" alt="">
                     
                      <a href="../Encomendas/Produtos/Pao/form_pao.php"><p>Pão de mel</p></a>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                      <img src="imagens/p3.jpg" alt="">
                    <a href="../Encomendas/Produtos/Trufa/form_trufa.php"><p>Trufa</p></a>
                  </div>
                  </div>
                  <div class="card">
                    <div class="box">
                        <img src="imagens/p4.jpg" alt="">
                      <a href="../Encomendas/Produtos/Bolo/form_bolo.php"><p>Bolo de Pote</p></a>
                    </div>
              </div>
           
          
  </div>

</section>
         
         
         <footer>
                      <ul class="lista_informacoes">
                        <li> <span class="material-symbols-outlined">pin_drop </span>Endereço: Av. Ten. Marques, s/n - Fazendinha, Santana de Parnaíba - SP, 06529-001</li><br>
                        <li><span class="material-symbols-outlined">call</span>Telefone: (11) 96150-4684 </li><br>
                        <li><span class="material-symbols-outlined">mail </span>Email: Join.in.the.spoon@gmail.com</li><br>
                        <li>Instagram: @join_in_the_spoon</li>
                       
                        <a  href="https://br.pinterest.com/daianemagalhaesdecastro/fotos-do-site/"><i  class="fa fa-pinterest fa-stack-1x">Imagens tiradas do Pinterest</i></a>
                      </ul>

          
          
       
      </footer>

    </main>
    <script src="js/mobile-navbar.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    

  </body>
</html>
