<?php  
error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
include ("/php/database.php");
include ("logar.php");
include ("cadastrar.php");

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Quiz [Tudo é Educação]</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

<div class="pen-title">
  <h1>Login Quiz [Tudo é Educação]</h1><span>by <a href='https://www.facebook.com/domingosliraneto'>Domingos Neto e Derik Spencer</a></span>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="index.php?acao=login" method="post">
      <div class="input-container">
        <input type="text" id="Usuario" name="Usuario" required="required"/>
        <label for="Username">Usuario</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Senha" name="Senha" required="required"/>
        <label for="Password">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>LOGAR</span></button>
      </div>
      <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Solicitar Cadastro
      <div class="close"></div>
    </h1>
    <form action="index.php?acao=cadastrar" method="post">
      <div class="input-container">
        <input type="text" id="Nome" name="Nome" required="required"/>
        <label for="Username">Nome</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Telefone" name="Telefone" required="required"/>
        <label for="Username">Telefone</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Nascimento" name="Nascimento" required="required"/>
        <label for="Username">Nascimento AAAA-MM-DD</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Endereco" name="Endereco" required="required"/>
        <label for="Username">Endereço</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Atuacao" name="Atuacao" required="required"/>
        <label for="Username">Área de Atuação</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Email" name="Email" required="required"/>
        <label for="Username">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="Login" name="Login" required="required"/>
        <label for="Username">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Senha" name="Senha" required="required"/>
        <label for="Password">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="RepetirSenha" name="RepetirSenha" required="required"/>
        <label for="Repeat Password">Repetir Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Cadastrar</span></button>
      </div>
    </form>
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

  </body>
</html>