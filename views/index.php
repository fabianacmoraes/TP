<!DOCTYPE html>

<head>

	<meta charset="UTF-8">	
	
	<title>FMMoraes Consultoria e Assessoria | Home</title>

	<meta name="viewport" content="max-device-width=659, initial-scale=0.5">

	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>

	<script src="<?php echo base_url();?>static/js/jquery-1.8.3.min.js"></script>
	<script src="<?php echo base_url();?>static/js/jquery.cycle.all.js"></script>

	<script>
	$(function () {			
			$('#slide').cycle({fx:'fade', delay: -2000});		  
			});
	$(document).ready(function() {
    	$('a').click(function() {
        	$('a.active').removeClass("active");
        	$(this).addClass("active");
    	});
	});
	</script> 

	<link href="<?php echo base_url();?>static/css/estilo.css" rel="stylesheet"/>

</head>

<body>

<div id="container">
	<header>
	
    	<div id="logo"><a href="index"><img src="<?php echo base_url();?>static/img/logo1.png" alt="logo Fmmoraes Consultoria e Assessoria"/></a></div>
    	
    	<a href="login"><p class="login">ÁREA<br> ADMINISTRATIVA</p></a>
    	
		<nav>
            <a href="index" class="active">HOME</a>
            <a href="empresa">EMPRESA</a>
            <a href="servicos">SERVIÇOS</a>
            <a href="links">LINKS ÚTEIS</a>
            <a href="blog">BLOG</a>
            <a href="contato">CONTATO</a>
		</nav>

	</header>

<div id="slide">
	<img src="<?php echo base_url();?>static/img/foto1.jpg" alt="Foto Slide 1">
	<img src="<?php echo base_url();?>static/img/foto2.jpg" alt="Foto Slide 2">
	<img src="<?php echo base_url();?>static/img/foto3.jpg" alt="Foto Slide 3">
</div>

	<main>

	<div id="servicos">
		<div id="adv">
			<p class="titulo">Advocacia</p>
			<p class="conteudo">Conheça nossos serviços especializados.</p>
			<p class="linkVeja"><a href="servicos">Veja mais</a></p>
		</div>
		<div id="cont">
			<p class="titulo">Contabilidade</p>
			<p class="conteudo">Conheça nossos serviços especializados.</p>
			<p class="linkVeja"><a href="servicos">Veja mais</a></p>
		</div>
		<div id="adm">
			<p class="titulo">Administração</p>
			<p class="conteudo">Conheça nossos serviços especializados.</p>
			<p class="linkVeja"><a href="servicos">Veja mais</a></p>
		</div>
		<div id="imob">
			<p class="titulo">Corretor de imóveis</p>
			<p class="conteudo">Conheça nossos serviços especializados.</p>
			<p class="linkVeja"><a href="imobiliaria">Veja mais</a></p>
		</div>
	</div>

	<h1 class="frase">F.M.Moraes Consultoria e Assessoria</h1>

	<div id="bemvindo">
		<a href="imobiliaria.html"><img src="<?php echo base_url();?>static/img/02.jpg" alt="Apartamento" width="260" height="210"></a>
		<p class="frase">Conheça nosso apartamento exclusivo</p>
		<ul>
			<li>Pompéia - 16º andar - NOVO</li>
		</ul>
		<p>03 suítes, 02 varandas, duplex, 02 garagens, vista panorâmica, 01 quadra da praia, salão de festas, piscina, sauna, academia, playground, sala de jogos.</p>
		<a href="imobiliaria.html">Saiba mais</a>
	</div>

	</main>

	<footer>
		<div id="rodape">
		
			<div id="rod1">
				<p><a href="index.html">HOME</a> | <a href="empresa.html">EMPRESA</a> | <a href="servicos.html">SERVIÇOS</a> | <a href="contato.html">CONTATO</a></p>
			</div>
		
			<div id="rod2">
				<p>FMMORAES 2015. Todos os direitos reservados.</p>
				<p><a href="http://www.fmmoraesconsultoria.com.br">www.fmmoraesconsultoria.com.br</a> | <a href="contato">fmmjuridico@hotmail.com</a></p>
				<p>13 3216-1562</p>
			</div>
		
		</div>
	</footer>

</div>
</body>
</html>
