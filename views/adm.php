<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Área Administrativa - Cadastrar</title>

		 <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/boots/css/bootstrap.min.css"/>
		<!--<link href="css/normalize.css" rel="stylesheet">-->

		<style>
			form {
				width: 50%;
			}
		</style>

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
					<h3>Cadastrar nova notícia</h3><br>
				</div>
				<div class="row">
						<form role="form" action="/index.php/control/doPost2" method="POST">
                  <div class="form-group">
                    <label for="text">Título:</label>
                    <input type="text" class="form-control" name="titulo" required>
                  </div>
                  
                  <div class="form-group"> 
                    <label for="text">Data:</label>
                    <input type="date" class="form-control" name="data" required>
                  </div>
                  
                  <div class="form-group">
	                    <label for="text">Categoria:</label>
											<select name="cat" required>
												<option value=""></option>
												<option value="Advocacia">Advocacia</option>
									      <option value="Administracao">Administração</option>
									      <option value="Contabilidade">Contabilidade</option>
									      <option value="Imobiliaria">Imobiliária</option>
							  			</select>
						  		</div>
						  		
                  <div class="form-group">
                    <label for="text">Conteúdo:</label>
                    <textarea class="form-control" name="texto" required></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-default">Enviar</button>
            </form>
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