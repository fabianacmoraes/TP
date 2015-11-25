<!DOCTYPE html>

<head>

	<meta charset="UTF-8">	
	
	<title>FMMoraes Consultoria e Assessoria | Contato</title>

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
            <a href="blog">BLOG</a>
            <a href="contato" class="active">CONTATO</a>
		</nav>

	</header>


	<main>   
		<p id="id">Contato</p>
		<div id="contato">

		<div id="direita">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.6405826417745!2d-46.3060502!3d-23.9731465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0249b488349d%3A0xeacdbde1f072f0e4!2sAv.+Pedro+Lessa%2C+1446+-+Ponta+da+Praia%2C+Santos+-+SP%2C+11025-001!5e0!3m2!1spt-BR!2sbr!4v1432841218859" width="400" height="300" style="border:0"></iframe>

			<p>INFORMAÇÕES</p>
			<p>Endereço: Av. Dr. Pedro Lessa, 1446/ Cj 33 - Aparecida, Santos/SP</p>
			<p>Tel/Fax: (13) 3216-1562</p>
			<p>E-mail: fmmjuridico@hotmail.com</p>
 
		</div>

		<form action="/index.php/control/doPost" method="post">     
			<p>
				<label>Nome: *<br> 
					<input type="text" name="nome" id="nome" size="40"  maxlength="25" autocomplete="on" required placeholder="Digite seu nome">
				</label>
			</p>	

			<p>
				<label> Telefone: <br>
					<input type="tel" name="telefone" id="telefone" size="10" maxlength="40" placeholder="DDD+Número">
				</label>
			</p>

			<p>
				<label>E-mail: * <br>
					<input type="email" name="email" id="email" size="40" required placeholder="Digite seu e-mail">
				</label>
			</p>
			
			<p>
				<label> Assunto: <br>
					<input type="text" name="assunto" id="assunto" maxlength="30" size="40" placeholder="Digite o assunto da mensagem">
					</label>

			<p>
				<label>Mensagem: *<br>
					<textarea name="mensagem" id="mensagem"  rows="5" cols="31" placeholder="Digite a mensagem" required></textarea>
				</label>
			</p>

			<input type="submit" value="Enviar">
			<input type="reset" value="Limpar">
		</form>
		<br>
		<p> * Estes campos são obrigatórios </p>
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
