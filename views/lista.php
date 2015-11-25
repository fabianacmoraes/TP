<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/estilo.css"/>
    </head>

    <body>
        <p id="id">Testes</p>
        <?php
            foreach($usuarios as $u){
                echo "<table border='1'><tr><th>Nome</th><th>Telefone</th><th>E-mail</th><th>Assunto</th><th>Mensagem</th></tr>";
                echo "<tr><td>".$u->nome."</td><td>".$u->telefone."</td><td>".$u->email."</td><td>".$u->assunto."</td><td>".$u->mensagem."</td></tr></table>";
                
            }
        ?>
    </body>
</html> 