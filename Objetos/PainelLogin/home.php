<?php 
	error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	
  SESSION_start();

  include ("/php/database.php");
	include ("logof.php");
	
  
	
  if(!isset($_SESSION["IDsecao"]))
	{
		session_destroy();
		header("Location: index.php");
	}
	else
	{


 ?>

<html >
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </head>
<?php include ("enviarquestoes.php");?>

  <head>
    <meta charset="UTF-8">
    <title>QUIZ [Tudo é Educação]</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width">
    
    <link rel="stylesheet" href="css/normalize1.css">

    
        <link rel="stylesheet" href="css/stylepainel.css">

    
    
    
  </head>

  <body>

    <nav class="nav">
  <div class="burger">
    <div class="burger__patty"></div>
  </div>

  <ul class="nav__list">
    <li class="nav__item">
      <a href="#1" class="nav__link c-blue"><i class="fa fa-home"></i></a>
    </li>
    <li class="nav__item">
      <a href="#2" class="nav__link c-yellow scrolly"><i class="fa fa-pencil-square-o"></i></a>
    </li>
    <li class="nav__item">
      <a href="#3" class="nav__link c-red"><i class="fa fa-search"></i></a>
    </li>
    <li class="nav__item">
      <a href="home.php?acao=logof" class="nav__link c-green"><i class="fa fa-power-off"></i></a>
    </li>
  </ul>
</nav>

<section class="panel b-blue" id="1">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-info-circle"></i>&nbsp;Informativo</h1>
      <div class="panel__block"></div>
      <p>Olá professor: <strong>
    <?php  
    $con = new database;
	$con = $con->openConnection();
	$sql = mysqli_query($con,"SELECT NOME FROM PROFESSOR WHERE IDPROFESSOR ='".$_SESSION["IDsecao"]."'");

            while($data=mysqli_fetch_array($sql)){
            	echo  $data["NOME"];
            }

     echo  $data["NOME"]; ?></strong>, Está área é destinada ao senhor(a) professor do Tudo é Educação, nela você pode cadastrar questões e manipula-las a qualquer momento, de forma segura e pratica. O intuito desta área é que os senhores(as) professores, possam gerar QUIZ através de um aplicativo de celular.</p>
    </div>
  </article>
</section>
<section class="panel b-yellow" id="2">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-hdd-o"></i>&nbsp;Cadastro de Questões</h1>
      <div class="panel__block"></div>
      <p>Olá professor(a): <strong>
    <?php  
      	$con = new database;
	$con = $con->openConnection();
	$sql = mysqli_query($con,"SELECT NOME FROM PROFESSOR WHERE IDPROFESSOR ='".$_SESSION["IDsecao"]."'");

            while($data=mysqli_fetch_array($sql)){
            	echo  $data["NOME"];
            }

     echo  $data["NOME"];?></strong>, nesta área o senhor(a) pode cadastrar e deletar questões.</p>
  
  <div class="container">
  <button type="button" class="btn btn-lg btn-info collapsed" data-toggle="collapse" data-target="#demo1">Cadastrar Questões</button>
  <div id="demo1" class="collapse">
    <form action="home.php?acao=cadastrarquestoes" method="post">
  
  <fieldset>
    <legend>Cadastro de questões:</legend>
    
<h>Área das Questões:</h><br>
  <select name="AREA">
  <option value="1" name="Enuciado" required="required">Selecione Uma Opcção</option>
  <?php
  $con = new database;
  $con = $con->openConnection();
  $sql5 = mysqli_query($con,"SELECT * FROM PROFESSOR AS P inner join DADOS AS D  ON P.IDPROFESSOR = D.IDPROFFK INNER JOIN DADOSAREAINT AS DA ON D.IDDADOS = DA.IDDADOSFK INNER JOIN AREASINT AS AI ON DA.IDAREASINTFK = AI.IDAREASINT WHERE IDPROFESSOR = '".$_SESSION["IDsecao"]."'");  

    while ($data=mysqli_fetch_array($sql5)) {
      
    
  ?>
  
  <option value="1" name="Enuciado" required="required"><?php echo $data["nomeareaint"]; ?></option>
<?php } ?>
</select><br><br>

    <h>Enuciado:</h><br>
    <textarea rows="10" cols="40" maxlength="500" id="Enuciado" name="Enuciado" required="required"></textarea>
    <br>
    <h>Resposta:</h><br>
    <textarea rows="10" cols="40" maxlength="500" id="resposta" name="resposta" required="required"></textarea>
    <br><br>
    <button type="submit" class="btn btn-lg btn-info collapsed">Enviar Questão</button>
  </fieldset>
</form>
  </div>

    </div>
  </article>
</section>
<section class="panel b-red" id="3">
  <article class="panel__wrapper">
    <div class="panel__content">
      <h1 class="panel__headline"><i class="fa fa-newspaper-o"></i>&nbsp;Vizualizar Questões</h1>
      <div class="panel__block"></div>
      <p>Olá professor(a):

      	<strong>
    <?php  
      	$con = new database;
	$con = $con->openConnection();
	$sql = mysqli_query($con,"SELECT NOME FROM PROFESSOR WHERE IDPROFESSOR ='".$_SESSION["IDsecao"]."'");

            while($data=mysqli_fetch_array($sql)){
            	echo  $data["NOME"];
            }

     echo  $data["NOME"];?></strong>, nesta área o senhor(a) poderá visualizar suas questões cadastradas.</p>

  <div class="container">
  <button type="submit" class="btn btn-lg btn-info collapsed" data-toggle="collapse" data-target="#demo">Suas Questões</button>
  <div id="demo" class="collapse">
    <table border="1" style="width:100%">
  <tr>
    <td>Área da Questão:</td>
    <td>Enuciado:</td>
    <td>Resposta:</td>
  </tr>
  <tr>
    <?php 
    $con = new database;
    $con = $con->openConnection();
    $sql1 = mysqli_query($con,"SELECT * FROM QUESTOES as Q inner join ENUCIADOS as E on Q.ENUCIADOSFK = E.IDENUCIADOS inner join PROFESSOR as P on Q.IDPROFFK = P.IDPROFESSOR inner join RESPOSTAS as R on R.IDQUESTOESFK = Q.IDQUESTOES WHERE IDPROFFK ='".$_SESSION["IDsecao"]."'"); 
    while ( $data1=mysqli_fetch_array($sql1)) {
      ?>
    <td><?php echo  $data1["IDQUESTOES"] ?></td>
    <td><?php echo  $data1["ENUCIADOS"] ?></td>
    <td><?php echo  $data1["RESPOSTAS"] ?></td>
  <?php } ?>
  </tr>
</table>
  </div>
</div><br><br>
<div class="container">
  <button type="submit" class="btn btn-lg btn-info collapsed" data-toggle="collapse" data-target="#demo3">Quantidade de Questões</button>
  <div id="demo3" class="collapse">
<table border="1" style="width:100%">
  <tr>
    <th>Calculo - II</th>
    <th>Banco de Dados</th> 
    <th>Algebra</th>
    <th>Calculo - III</th>
  </tr>
    
  <tr>
    <?php  
    
    $sql1 = mysqli_query($con,"SELECT count(Q.IDQUESTOES) AS CONT FROM QUESTOES AS Q inner join AREASINT AS A  ON Q.IDAREASINTFK = A.IDAREASINT WHERE IDPROFFK = '".$_SESSION["IDsecao"]."' AND A.IDAREASINT = 1");
    $data = mysqli_fetch_array($sql1);
      ?>
    <td><?php echo $data["CONT"]; ?></td>
    <td></td> 
    <td></td>
    <td></td>
  </tr>
</table>
</div>
</div>
  </article> 
</section>
</div>    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/indexpainel.js"></script>

    
    
    
  </body>
</html>


<?php 

} ?>