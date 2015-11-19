<!DOCTYPE html>

<html>

<head>

	<meta charset="UTF-8">	
	
	<title>FMMoraes Consultoria e Assessoria | Empresa</title>

	<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

	<link href="<?php echo base_url();?>static/css/estilo.css" rel="stylesheet"/>
</head>

<body>

<div id="container">
	<header>
	
    	<div id="logo"><a href="index"><img src="<?php echo base_url();?>static/img/logo1.png" alt="logo Fmmoraes Consultoria e Assessoria"/></a></div>
        	
    	<a href="login"><p class="login">ÁREA<br> ADMINISTRATIVA</p></a>
    	
		<nav>
            <a href="index">HOME</a>
            <a href="empresa">EMPRESA</a>
            <a href="servicos">SERVIÇOS</a>
            <a href="links">LINKS ÚTEIS</a>
            <a href="blog" class="active">BLOG</a>
            <a href="contato">CONTATO</a>
		</nav>

	</header>


	<main>   
		<p id="id">Blog</p>
		
		<div class="blog">
			<?php
	            foreach($posts as $u){
	                echo "<div class='contblog'><h2>".$u->titulo."</h2>"."<span>Data: ".$u->data."</span><br><p>".$u->texto."</p><br></div>";
	            }
			?>
		</div>
	</main>

	<footer>
		<div id="rodape">
		
			<div id="rod1">
				<p><a href="index.html">HOME</a> | <a href="empresa.html">EMPRESA</a> | <a href="servicos.html">SERVIÇOS</a> | <a href="contato.html">CONTATO</a></p>
			</div>
		
			<div id="rod2">
				<p>FMMORAES 2015. Todos os direitos reservados.</p>
				<p><a href="http://www.fmmoraesconsultoria.com.br">www.fmmoraesconsultoria.com.br</a> | <a href="contato.html">fmmjuridico@hotmail.com</a></p>
				<p>13 3216-1562</p>
			</div>
		
		</div>
	</footer>

</div>
</body>
</html>
