<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Grupo Magister | Vestibular </title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css?v2">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Poppins:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Coloque um email válido.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Coloque uma senha");return false;}if(a.length<5 || a.length>25){alert("Coloque uma senha de 5 a 25 caracteres");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("As senhas devem ser iguais.");return false;}

  var zz =document.forms["form"]["tipo_ingresso"].value;if (z == null || z == ""){alert("Coloque um método de ingresso.")};
}
</script>

<style>
  h1,h2,h3,h4,h5,h6,b,a, button, input, option, select {
    font-family:"Poppins";
    letter-spacing: 0.09rem;
}
</style>
</head>

<body>
<div class="header" style="background: #fff">
<div class="row">
<div class="col-lg-6">
<span class="logo">
  <img style="min-width: 140px; width: 240px; margin-top:15px" src="http://grupomagister.com.br/app/portalfatepi/img/logo/logo-empresa.png">

</span></div>
<div class="col-md-2 col-md-offset-4">
<a style="padding: 7px; color: #fff; background: #216AA6" href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Entrar</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Entre com seu email" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Entre com sua senha" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Acessar</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1" style="background-size: cover;height: 90vh;">
<div class="row">
<style type="text/css">
  h4 { 
      color: #fff;
      margin-left: 10%;
      margin-top: 40%;
      font-weight: bolder;
      font-size: 30px;
  }
</style>
<div class="col-md-5 " style="background: ;">
   <!-- <h4>VESTIBULAR 2022.1</h4> -->
   <!-- <h6>Aqui você</h6> -->
</div>
<div class="col-md-2 "></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>

<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <h3 style="color: #444444"><strong>Inscrição Online | Vestibular</strong></h3>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" required="" placeholder="Digite seu nome" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="cpf"></label>  
  <div class="col-md-12">
  <input id="cpf" name="cpf" required="" placeholder="Digite seu CPF" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Digite seu email" class="form-control input-md" type="email">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" required="" placeholder="Digite seu número telefone" class="form-control input-md" type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="display: none">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Selecione" class="form-control input-md" >
       <option value="">Selecione seu gênero:</option>
       <option value="Vestibular">Vestibular</option>
       <option value="Nota Enem">Nota Enem</option>
       <option value="Transferência">Transferência</option> 
       <option value="Portador">Portador</option> 
     </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group" style="">
  <label class="col-md-12 control-label" for="tipo_ingresso"></label>
  <div class="col-md-12">
    <select id="tipo_ingresso" required="" name="tipo_ingresso" placeholder="Selecione a forma de ingresso" class="form-control input-md" >
       <option value="">Selecione a forma de ingresso:</option>
       <option value="Vestibular">Vestibular</option>
       <option value="Nota Enem">Nota Enem</option>
       <option value="Transferência">Transferência</option> 
       <option value="Portador de Curso">Portador de Curso Superior</option> 
     </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
    <select id="college" name="college" placeholder="Enter your gender" class="form-control input-md" >
       <option value="NA">Selecione seu curso de interesse:</option>
       <option value="Direito">Direito</option>
       <option value="Sistemas de Informação">Sistemas de Informação</option> 
       <option value="Fonoaudiologia">Fonoaudiologia</option>
       <option value="Ciências Contábeis">Ciências Contábeis</option> 
       <option value="Pedagogia">Pedagogia</option>
       <option value="Fisioterapia">Fisioterapia</option> 
       <option value="Educação Física">Educação Física</option>
       <option value="Psicologia">Psicologia</option> 
       <option value="Administração">Administração</option>
       
     </select>
  <!-- <input id="college" name="college" placeholder="Digite seu curso de interesse" class="form-control input-md" type="text"> -->
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="indicacao"></label>  
  <div class="col-md-12">
  <input id="indicacao" name="indicacao" placeholder="Digite o nome de quem indicou" class="form-control input-md" type="text">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Crie sua senha" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirme sua senha" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input style="text-transform: ; font-weight: bold; background: #216AA6; color: #fff; height: 44px;"  type="submit" class="sub" value="Inscreva-se" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->
<?php 
  include_once('footer.php');
?>