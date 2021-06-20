<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">  
  </head>
  <body>
         <nav class="navbar navbar-inverse navbar-fixed-top ">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Index.php">Propague</a>
            </div>
					<!-- Collect the nav links, forms, and other content for toggling -->
          </div><!-- /.container-fluid -->
        </nav>
		<br/>
		<br/>

      <div class="container">
            <div class="row-fluid">
                 <div class="col-md-6 col-md-offset-3">
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
				   <h1><strong><center>Efetue Login</center></strong></h1>
					<hr>
                    <form name="loginform" method="post" action="conex_teste_tcc_login.php">
                        <label class="sr-only" for="inputEmail">E-mail:
                        </label>
                        <input type="text" id="inputemail" name="usuario" class="form-control input-lg" placeholder="Usuário" required />
						<br/>
                        <label class="sr-only" for="inputPass">Senha:
                        </label>
                        <input type="password" id="inputPass" name="senha" class="form-control input-lg" placeholder="Senha" required />
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="s" />Lembre-me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-ok"></span>Acessar</button>
                        <hr>
                        <center><a href="formcadastro.php" class="a_login">Não tem cadastro?</a> <a href="#"class="a_login">Esqueceu a Senha?</a></center>
						<hr>
                    </form>
                </div>
            </div>  
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>