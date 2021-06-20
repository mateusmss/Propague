<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
         <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Propague</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html"></a>
                    </li>
                    <li>
                        <button type="button" class="btn btn-lg btt" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o" aria-hidden="true"></i></button>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        
      <div id="logi" class="logi">
      <div class="container">
            <div class="row">
                 <div class="col-md-6 col-lg-6 col-md-offset-3">
				   <h1 class="wow fadeInLeft"><strong><center>Efetue Login</center></strong></h1>
					<hr>
                    <form name="loginform" method="post" action="conex_teste_tcc_login.php">
                        <label class="sr-only wow fadeInLeft" for="inputEmail">E-mail:
                        </label>
                        <input type="text" name="usuario_info" class="form-control input-lg wow fadeInLeft" placeholder="Usuário" required />
						<br/>
                        <label class="sr-only wow fadeInLeft" for="inputPass">Senha:
                        </label>
                        <input type="password" name="senha" class="form-control input-lg wow fadeInLeft" placeholder="Senha" required />
                        <div class="checkbox">
                            <label class="wow fadeInLeft">
                                <input class="ch " type="checkbox" value="s" />Lembre-me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block wow fadeInLeft"><span class="glyphicon glyphicon-ok"></span>Acessar</button>
                        <hr>
                        <center><a href="formcadastro.php" class="a_login wow fadeInLeft">Não tem cadastro?</a> <a class="wow fadeInLeft" href="#"class="a_login">Esqueceu a Senha?</a></center>
						<hr>
                    </form>
                </div>
                </div>
            </div> 
                </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><script src="js/bootstrap.min.js"></script><script src="js/wow.js"></script>
    <script>
    new WOW().init();
    </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

<script>
var $doc = $('html, body');
$('.page-scroll').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
</script>
  </body>
</html>