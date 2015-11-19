<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Área Administrativa - Páginas</title>

		 <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/boots/css/bootstrap.min.css"/>
		<!--<link href="css/normalize.css" rel="stylesheet">-->
	</head>
	<body>
		<!-- nav -->
		<div class="container-fluid">
			<nav class="navbar navbar-inverse">
				<div class="container">
					<ul class="nav navbar-nav">
						<li><a href="home" class="active">Home</a></li>
						<li><a href="adm">Cadastrar notícia</a></li>
						<li><a href="paginas">Editar notícias</a></li>
					</ul>

					<ul class="nav navbar-nav pull-right">
						<li><a href="logout">Sair</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<!--/. nav -->

		<main>
			<div class="container">
				<div class="row">
					<h3>Editar notícias já publicadas</h3><br>
				</div>

				<div class="row">
					<div class="table-responsive">
					  <table class="table">
					  	<th>Título</th>
					  	<th>Data</th>
					  	<th>Ações</th>
						   <tr>
						    <td></td>
						    <td></td> 
						    <td></td>
						  </tr>
					  </table>
					</div>
				</div>
			</div>
		</main>

		<!--
		<div class="container-fluid">
			<footer class="footer">
				<div class="container">
					<div class="row">
						RODAPE
					</div>
				</div>
			</footer>
		</div>
		-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>