<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> BykMin  - Sobre</title>
        <meta name="description" content="Acesse as Informações Com Facilidade Agilidade em Tempo Real ">
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="BykMin"/>
        <meta property="og:description" content="Acesse as Informações Com Facilidade Agilidade em Tempo Real "/>
        <meta property="og:url" content="http://www.timidia.com.br/doc/BykMin"/>
        <!--<meta property="og:image" content="http://www.timidia.com.br/img/banner.jpg"/>--> <!--link com a imagem  do site-->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="nomedoicom" />
            <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/sobre.css">
        <link rel="stylesheet" href="css/responsivo.css">
          <script src="js/libs/modernizr.custom.45655.js"></script>
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
                        <li><a href="sobre.php" title="Sobre" class="menu_ativo">Sobre</a></li> 
                        <li><a href="produtos.php" title="Produtos">Produtos</a></li> 
                        <li><a href="portfolio.php" title="Portfólio">Portfólio</a></li> 
                        <li><a href="contato.php" title="Contato">Contato</a></li> 
                    </ul>
                </nav>
            </div>

        </header>
        <!--FIM HEADER -->
        <section class="introducao-interna interna_sobre">
            <div class="container">
                <h1>Sobre</h1>
                <p>Conheça mais sobre BykMin </p>
            </div>
        </section>
        <!--FIM INTRODUÇÃO-INTERNA -->

        <section class="missao_sobre container animar-interno">
            <div class="grid-10">
                <h2 class="subtitulo-interno">historia, missão e visão</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
            <div class="grid-6">
                <h2 class="subtitulo-interno">valores</h2>
                <ul>
                    <li>Qualidade no processo com</li>
                    <li>Foco no cliente sem perder a</li>
                    <li>Qualidade no processo com</li>
                    <li>Qualidade no processo com</li>
                </ul>
            </div>
            <div class="grid-16 foto-equipe">
                <img src="img/equipe-bikcraft.jpg" alt="[Equipe BykMin]" title="Equipe BykMin"/>
            </div>
        </section>

        <section class="qualidade container">
			<h2 class="subtitulo">Qualidade</h2>
               <img src="img/logo-meio.png" alt="Bikcraft">
			<ul class="qualidade_lista">
				<li class="grid-1-3">
					<h3>Durabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Design</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
				<li class="grid-1-3">
					<h3>Sustentabilidade</h3>
					<p>Ainda assim, existem dúvidas a respeito de como a necessidade de renovação renovação renovação</p>
				</li>
			</ul>
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
        <!--  JavaScript-->
       <!--  JavaScript-->
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Fecha JavaScript-->  
        <script>
            $(function () {
                $(".rslides").responsiveSlides();
            });
        </script>
    </body>
</html>
