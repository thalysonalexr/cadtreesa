<?php

require "../bootstrap.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadtreesa - Cadastro de Árvores de Sistemas & Agrícolas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Cadtreesa - Cadastro de Árvores de Sistemas & Agrícolas">
        <meta name="keywords" content="Cadastro Árvores,UFMT,QRCode,Projeto,Universidade">
        <meta name="robots" content="index, follow">
        <meta name="author" content="Thalyson Alexandre Rodrigues de Sousa">
        <!-- ICONS -->
        <link rel="icon" type="image/png" href=<?=assets('/assets/images/logo32.png')?> sizes="32x32" />
        <link rel="icon" type="image/png" href=<?=assets('/assets/images/logo16.png')?> />
        <!-- CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href=<?=assets('/assets/css/master-style.css')?>>
    	<link rel="stylesheet" href=<?=assets('/assets/css/responsive.css')?>>
    	<!-- JS -->
    	<script defer src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script defer src=<?=assets('/assets/js/animate.js')?>></script>
    	<script defer src=<?=assets('/assets/js/sendMail.js')?>></script>
    </head>
    <body>
        <header class="container" id="myheader">
	        <a href="" title="Página inicial"><h1 class="logo">CADTREESA - Cadastro de Árvores de Sistemas & Agrícolas</h1></a>
	        <button class="btn-menu"><i class="fa fa-bars fa-lg"></i></button>

	        <nav class="menu">
	            <ul class="nav justify-content-end">
	              <li><a href="#tree" class="nav-link active" id="link-tree">Árvore</a></li>
	              <li><a href="#about" class="nav-link active" id="link-about">Sobre</a></li>
	              <li><a href="#help" class="nav-link active" id="link-help">Ajuda</a></li>
	              <li><a href="#who" class="nav-link active" id="link-who">Quem somos</a></li>
	              <li><a href="#contact" class="nav-link active" id="link-contact">Contato</a></li>
	            </ul>
	        </nav>
	    </header>

	    <section id="title" class="container banner">
	        <hgroup class="title">
	            <h2>Cadastro de Árvores de Sistemas & Agrícolas</h2>
	            <h3>Escaneie o código QR das árvores e nos visite</h3>
	        </hgroup>
	    </section>

	    <section id="tree" class="container">
	    	<?php require "../routes/web.php"; ?>
	    </section>

	    <section id="info">
	        <article id="about" class="container">
	            <h2>Sobre o projeto</h2>
	            <p>O projeto <strong>Cadtreesa</strong> (Cadastro de Árvores de Sistemas & Agrícolas) tem por objetivo o cadastro e a validação de informações das árvores da <em>Universidade Federal de Mato Grosso, campus Rondonópolis - UFMT/CUR</em>. Sendo o público-alvo os alunos e professores do curso de <em>Engenharia Agrícola e Ambiental</em>. A saída dos dados cadastrados no aplicativo são disponibilzados aqui nesta página.</p>
	        </article>

	        <article id="help" class="container">
	            <h2>Ajuda</h2>
	            <p>As informações cadastradas são informadas pelos alunos e professores do curso de <em>Engenharia Agrícola e Ambiental da UFMT-CUR</em>, sendo validada pelos professores e disponibilizada nesta página. Esta <strong>WEB page</strong> tem por finalidade a saída destes dados cadastrados. Para a visualização dos dados deve-se escanear um <a class="link-web" title="Visitar Wikipedia" href="https://pt.wikipedia.org/wiki/C%C3%B3digo_QR" target="_blank">Código QR</a> gerado a partir das informações da árvore. Este irá gerar uma URL redirecionando para visualização dos dados aqui mesmo. Para qualquer dúvida ou correção poderá ser enviado um <a class="link-web" id="link-email" href="#contact">e-mail</a> para nós e entraremos em contato assim que possível.</p>
	        </article>

	        <article id="who" class="container">
	            <h2>Quem somos?</h2>
	            <p>Graduandos do curso de <mark>Sistemas de Informação</mark>. Projeto realizado na disciplina de <em>Conceitos de Linguagens de Programação</em> administrada pelo professor Lauro Ricardo. Somos nós:</p>
	            <ul>
	                <li>Thalyson Alexandre Rodrigues de Sousa</li>
	                <li>Rodrigo Oliveira</li>
	                <li>& Nicolas Thiago</li>
	            </ul>
	        </article>
	    </section>

	    <section id="contact" class="container">
	        <h2>Dúvidas?</h2>
	        <h3>Envie-nos um e-mail</h3>
	        <?=get("message");?>
	        <div id="message" class="container alert"></div>
	        <form id="contact" action="" method="post">
	            <input id="name" name="name" type="text" placeholder="Nome completo" required><br>
	            <input id="email" name="email" type="email" placeholder="exemplo@email.com" required><br>
	            <input id="subject" name="subject" type="text" placeholder="Assunto da mensagem" required><br>
	            <textarea id="content" name="content" rows="5" cols="80" placeholder="Mensagem..." required></textarea><br>
	            <input type="submit" value="Enviar">
	        </form>
	        <p><i class="fa fa-envelope fa-lg"></i>cadtreesa.suporte@gmail.com</p>
	    </section>

        <footer class="rodape">
	        <div>
	            <a href="#"><img src=<?=assets('/assets/images/logo32.png')?> alt="Logo Cadtreesa"></a>
	            <p class="copyright">
	                Copyright © Cadtreesa <?=date('Y')?>. Todos os direitos reservados.
	            </p>
	        </div>
    	</footer>
    </body>
</html>