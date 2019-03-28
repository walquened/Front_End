<!DOCTYPE html>
<html lang="pt-br">
     <head>
          <meta charset="UTF-8">
          <title> BykMin  - Produtos *</title>
          <meta name="description" content="Acesse as Informações Com Facilidade Agilidade em Tempo Real ">
          <meta property="og:type" content="website"/>
          <meta property="og:title" content="BykMin"/>
          <meta property="og:description" content="Acesse as Informações Com Facilidade Agilidade em Tempo Real "/>
          <meta property="og:url" content="http://www.timidia.com.br/doc/BykMin"/>
          <!--<meta property="og:image" content="http://www.timidia.com.br/img/banner.jpg"/>--> <!--link com a imagem  do site-->

          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="shortcut icon" href="nomedoicom" />
          <link rel="stylesheet" href="css/normalize.css"/>
          <link rel="stylesheet" href="css/reset.css"/>
          <link rel="stylesheet" href="css/grid.css"/>
          <link rel="stylesheet" href="css/style.css"/>
          <link rel="stylesheet" href="css/contato.css"/>
          <link rel="stylesheet" href="css/responsivo.css"/>

     </head>
     <body>
          <?php
          // Digite o Codigo PHP aqui!ddddd
          ?>
          <header class="header"><h1 class="fontzero">BykMin</h1>
               <div class="container">
                    <a href="index.php" class="grid-4"> 
                         <img src="img/logo-topo.png" alt="BykMin" title="BykMin"> </a>

                    <nav class="grid-12 header_menu">
                         <h6 class="fontzero">BykMin</h6>
                         <ul>
                              <li><a href="sobre.php" title="Sobre">Sobre</a></li> 
                              <li><a href="produtos.php" title="Produtos">Produtos</a></li> 
                        <li><a href="portfolio.php" title="Portfólio">Portfólio</a></li> 
                        <li><a href="contato.php" title="Contato" class="menu_ativo">Contato</a></li> 
                         </ul>
                    </nav>
               </div>

          </header>
          <!--FIM HEADER -->
          <section class="introducao-interna interna_contato">
               <div class="container">
                    <h1>Contato</h1>
                    <p>Tire suas duvidas com a gente</p>
               </div>
          </section>
          <!--FIM INTRODUÇÃO-INTERNA -->


          <!-- FIM PRODUTOS -->
          <section class="contato container"> 
               <form id="form_orcamento" class="contato-form grid-8">
                    <label>Nome </label>
                    <input type="text" name="nome" placeholder="Infome Seu Nome..">
                    <label>E-mail </label>
                    <input type="email" name="email" placeholder="Informe Seu E-mail.. ">

                    <label>Telefone  </label>
                    <input type="tel" name="telefone" placeholder="Informe Seu Telefone.. ">

                    <label>Mensagem  </label>
                    <textarea placeholder="Digite Sua Mensagem.. "></textarea>
                    <button class="btn btn-preto">Enviar</button>
               </form>
               <div class="contato_dados grid-8">
                    <h3>Dados</h3>
                    <span>+55 64 993163816</span>
                    <span>E-mail : suporte@gmail.com</span>
                    <span>Rua B9 Quadra B6</span>
                    <span>Cidade : ************ <b>- UF - Brasil</b></span>
                    
                    <h3>Rede Sociais</h3> 
                    <ul>
                         <li><a target="_blank" href="https://facebook.com"><img src="./img/redes-sociais/facebook.png"></a></li>
                         <li><a target="_blank" href="https://www.instagram.com/"><img src="./img/redes-sociais/instagram.png"></a></li>
                         <li><a target="_blank" href="https://twitter.com/"><img src="./img/redes-sociais/twitter.png"></a></li> 
                    </ul>
               </div> 
          </section>
          <!-- FIM FORMULARIOS -->
              <section class="container contato_mapa">
                   <a href="http://google.com" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg"></a>
                         </section>
          <!-- FIM mapa -->
          <section class="quebra">
               <blockquote class="quote-externo container">
                    <p>" Não tenha nada em sua cassa que você não considere útil ou acredita ser bonito"</p>
                    <cite>william morris</cite></blockquote>
          </section>
          <!-- Fim QUEBRA-->
          <footer>
               <div class="footer">
                    <div class="container">
                         <div class="grid-8 footer_historia">
                              <h3>nossa história</h3>
                              <p>O segredo da vida não é nada mais que viver intensamente, cada momento, trazido por ele mesma. O Segredo da Felicidade está na Vida, Segredo da Vida é saber viver, o Segredo de viver é saber Amar, o Segredo de Amar é conhecer a Deus.</p>
                         </div>

                         <div class="grid-4 footer_contato">
                              <h3>CONTATO</h3>
                              <ul>
                                   <li>- 64 993163816</li>
                                   <li>contato@gmail.com</li>
                                   <li>Cidade - ******* <b>UF</b></li>
                              </ul>
                         </div>

                         <div class="grid-4 footer_redes">
                              <h3>Rede Sociais</h3>
                              <ul>
                                   <li><a target="_blank" href="https://facebook.com"><img src="./img/redes-sociais/facebook.png"></a></li>
                                   <li><a target="_blank" href="https://www.instagram.com/"><img src="./img/redes-sociais/instagram.png"></a></li>
                                   <li><a target="_blank" href="https://twitter.com/"><img src="./img/redes-sociais/twitter.png"></a></li> 
                              </ul>
                         </div>

                    </div>

               </div>

               <div class="copy">
                    <div class="container">
                         <p class="grid-16">  &copy 2015 - <?php echo date('Y'); ?> BykMin - Todos os direitos Reservados</p>
                    </div>
               </div>
          </footer> 
          <!-- -->
          <!-- -->
       <!--  JavaScript-->
        <script src="js/libs/plugins.js"></script>
        <script src="js/libs/main.js"></script>
        <script src="js/libs/jquery.min.js"></script>
        <!-- Fecha JavaScript-->
     </body>
</html>
