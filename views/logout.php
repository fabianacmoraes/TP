<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Área Administrativa - Login</title>

         <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/boots/css/bootstrap.min.css"/>
        <!--<link href="css/normalize.css" rel="stylesheet">-->

        <style>
            main{
                margin-top: 10%;
            }

            form {
                width: 30%;
                margin: 0 auto;
                padding: 0;
            }
            
            a{
                font-size: 1.5em; 
            }
        </style>

    </head>

    </body>

    <main>
        <div class="container">
            <div class="row">
                <h1 class="text-center">Até logo</h1>
            </div>
            
            <div class="row">  
                <form role="form" action="/index.php/control/auth" method="POST">
                      <div class="form-group">
                        <label for="text">Usuário:</label>
                        <input type="text" class="form-control" name="nome">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Senha:</label>
                        <input type="password" class="form-control" name="senha">
                      </div>
                      <button type="submit" class="btn btn-default">Entrar</button>
                </form>
            </div>
            
            <div class="row">
                <a href="index">Voltar para o site</a>
            </div>
        </div>
    </main>

</body>
</html>