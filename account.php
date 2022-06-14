<?php  
//    date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
 
//   $new_name = date("Y.m.d-H.i.s"); //Definindo um novo nome para o arquivo
  

//   echo "<pre>";
//   print_r ($new_name);
//   echo "</pre>";

// exit();




include_once 'dbConnection.php';
session_start();
// cold
if(isset($_FILES['fileUpload_historico']) && isset($_FILES['fileUpload_plano']))
{
  // historico  
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

  $ext = strtolower(substr($_FILES['fileUpload_historico']['name'],-4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s").'h' . $ext; //Definindo um novo nome para o arquivo
  $dir = './upload/'; //Diretório para uploads

  move_uploaded_file($_FILES['fileUpload_historico']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

  $historico = $dir.$new_name;

  // plano de curso
  $ext2 = strtolower(substr($_FILES['fileUpload_plano']['name'],-4)); //Pegando extensão do arquivo
  $new_name2 = date("Y.m.d-H.i.s").'p' . $ext2; //Definindo um novo nome para o arquivo
  $dir = './upload/'; //Diretório para uploads

  move_uploaded_file($_FILES['fileUpload_plano']['tmp_name'], $dir.$new_name2); //Fazer upload do arquivo

  $historico = $new_name;
  $plano_curso = $new_name2;


  $email = $_SESSION['email'];
  $q=mysqli_query($con,"UPDATE 


  `user` SET `historico`='$historico',`plano_curso`='$plano_curso'  


    WHERE  email = '$email' ")or die('Error045');



    $sucesso = '
    <div class="alert alert-success app-alerta alert-dismissible fade in mymodal" role="alert">
      <h1 style="color:#313131;">Comprovante Anexado com Sucesso!</h1>
     
        <hr>
   
      <p>
        Iremos entrar em contato com você em até 48 horas para iniciarmos sua matrícula.
        
      </p>
    </div>
    ';

}


if(isset($_FILES['fileUpload_enem']))
{
  // historico  
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

  $ext = strtolower(substr($_FILES['fileUpload_enem']['name'],-4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
  $dir = './upload/'; //Diretório para uploads

  move_uploaded_file($_FILES['fileUpload_enem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

  $enem = $new_name;


  $email = $_SESSION['email'];
  $q=mysqli_query($con,"UPDATE 


  `user` SET `enem`='$enem' 


    WHERE  email = '$email' ")or die('Error046');



    $sucesso = '
    <div class="alert alert-success app-alerta alert-dismissible fade in mymodal" role="alert">
      <h1 style="color:#313131;">Comprovante Anexado com Sucesso!</h1>
     
        <hr>
      <p>
       Iremos entrar em contato com você em até 48 horas para iniciarmos sua matrícula.
      </p>
    </div>
    ';

}

if(!(isset($_SESSION['email']))){
header("location:index.php");


}
?>
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
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>

 
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Poppins:400,700,300' rel='stylesheet' type='text/css'>

<style>
  p {
      font-family: 'Poppins' !important;
      /* color: #525151; */
      
      color: #272727;
      font-weight: 500;
    }
</style>
 <!--alert message-->
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<!--alert message end-->

</head>
<?php
include_once 'dbConnection.php';
?>
<body>
<div class="header" style="background: #fff;background: #fff;
    border-bottom: 2px;
    border-color: #918e8e;
    border-style: solid;
    border-left: 0;
    border-right: 0;
    border-top: 0;">
<div class="row">
<div class="col-lg-6">
<span class="logo">
  <img style="min-width: 140px; width: 240px; margin-top:15px" src="http://grupomagister.com.br/app/portalfatepi/img/logo/logo-empresa.png"></span></div>
<div class="col-md-4 col-md-offset-2">
  <style type="text/css">
    
    .log1,.log {
      color:#216aa6;
    }
  </style>
 <?php
// include_once 'dbConnection.php';
// session_start();
  if(!(isset($_SESSION['email']))){
// header("location:index.php");


}
else
{
$name = $_SESSION['name'];
$email=$_SESSION['email'];

include_once 'dbConnection.php';

echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Olá,</span> <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Sair</button></a></span>';
}?>
</div>
</div></div>
<div class="bg">

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Grupo Magister</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Início<span class="sr-only">(current)</span></a></li>
        <?php if ($_SESSION['email'] == 'admin@admin.com'): ?>
        <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Histórico</a></li>
        <?php else: ?>
          
        <?php endif ?>
        <?php if ($_SESSION['email'] == 'admin@admin.com'): ?>
		    <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>><a href="account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Resultado</a></li>
          
        <?php else: ?>
          
        <?php endif ?>
		<li class="pull-right"> <a href="logout.php?q=account.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Sair</a></li>
		</ul>
            <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Digite tag ">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;Pesquisar</button>
      </form>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">

<!-- relatar problema -->
<?php if (@$_GET['q']==7): ?>
  <div class="panel">
      <h2 style="text-align: center;">Deseja refazer a prova?</h2>
      <br>
      <h4>Caso houve algum problema durante a realização da prova e deseje reiniciar:</h4>
      <br>
      <ul>
        <li>Entre em contato conosco via <strong>whatsapp</strong> pelo número <strong>(86) 2107-2200</strong> ou <a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=558621072200">clique aqui</a></li>
      
      </ul>
    
      
     
      <br>
      <button style="background: #fff; border: 0;"><a href="account.php?q=1" class="pull-left btn sub1" style="width: 116px;height: 39px;margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Voltar</b></span></a></button>
      <!-- cleyton -->
  </div>
<?php endif ?>

<!-- anexar documento (transferencia ; portador)  -->
<?php if (@$_GET['q']==12): ?>
  <div class="panel">
       <?php  
            if(isset($_FILES['fileUpload_historico']) && isset($_FILES['fileUpload_plano']))
            {
                echo $sucesso;
            } else {

            
        ?>    


      <h2 style="text-align: center;">Instruções</h2>
      <br>
      <h4>Para concluir a inscrição anexe os seguintes documentos:</h4>
      <br>
      <br>
      <form id="formName" name="meuform" method="post"
                          enctype="multipart/form-data" autocomplete="off" role="form"
                          class="form form-dark ws-validate forme">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <!-- <label class="control-label">Escolha um Horário</label> -->
          <div class="form-group">
              <label for="arquivo-1">Histórico Escolar</label>
              <input name="fileUpload_historico" type="file" class="form-control-file" id="arquivo-1">
          </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
          <!-- <label class="control-label">Escolha um Horário</label> -->
          <div class="form-group">
              <label for="arquivo-2">Planos de Curso</label>
              <input name="fileUpload_plano" type="file" class="form-control-file" id="arquivo-2">
          </div>
      </div>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <ul>
        <li>Entre em contato conosco via <strong>whatsapp</strong> pelo número <strong>(86) 2107-2200</strong> ou <a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=558621072200">clique aqui</a> caso haja alguma dúvida</li>
      
      </ul>
    <!-- cold -->
      
     
      <br>
      <button id="botao" style="background: #fff; border: 0;"><a href="" class="pull-left btn sub1" style="width: 116px;height: 39px;margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Salvar</b></span></a></button>
      <!-- cleyton -->
      </form>

    <?php } ?>
  </div>
<?php endif ?>


<!-- anexar documento (nota enem)  -->
<?php if (@$_GET['q']==11): ?>
  <div class="panel">
       <?php  
            if(isset($_FILES['fileUpload_enem']) )
            {
                echo $sucesso;
            } else {

            
        ?>    


      <h2 style="text-align: center;">Instruções</h2>
      <br>
      <h4>Para concluir a inscrição, anexe um print ou imagem com a nota do enem:</h4>
      <br>
      <br>
      <form id="formName" name="meuform" method="post"
                          enctype="multipart/form-data" autocomplete="off" role="form"
                          class="form form-dark ws-validate forme">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <!-- <label class="control-label">Escolha um Horário</label> -->
          <div class="form-group">
              <label for="arquivo-3">Nota do ENEM</label>
              <input name="fileUpload_enem" type="file" class="form-control-file" id="arquivo-3">
          </div>
      </div>
     
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <ul>
        <li>Entre em contato conosco via <strong>whatsapp</strong> pelo número <strong>(86) 2107-2200</strong> ou <a target="_blank" href="https://api.whatsapp.com/send?1=pt_BR&phone=558621072200">clique aqui</a> caso haja alguma dúvida</li>
      
      </ul>
    <!-- cold -->
      
     
      <br>
      <button id="botao" style="background: #fff; border: 0;"><a href="" class="pull-left btn sub1" style="width: 116px;height: 39px;margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Salvar</b></span></a></button>
      <!-- cleyton -->
      </form>

    <?php } ?>
  </div>
<?php endif ?>
<!-- instruções -->
<?php if (@$_GET['q']==10): ?>
  <div class="panel">
      <h2 style="text-align: center;">Instruções:</h2>
      <h3>Prova</h3>
      
      <ul>
        <li>Você pode fazer a prova a qualquer momento, basta acessar com seu email e com sua senha que você criou no momento da inscrição clicando no botão <strong>ENTRAR</strong>.</li>
        <li>A prova é no modelo utilizado para o ENEM;</li>
        <li>É um teste objetivo, baseado em competências, abrangendo os seguintes campos do saber: ciências humanas, ciências da natureza, linguagens e matemática;</li>
        <li>A prova está dividida em 46 questões de múltipla escolha, com 5 alternativas (A, B, C, D, E) cada;</li>
        <li>A nota mínima para aprovação é 60 pontos;</li>
      </ul>
    
      
      <h3>Resultado</h3>
      <ul>
          <li>Resultado será divulgado no site em até 48h após a prova.</li>  
      </ul>
      <h3>Matrícula</h3>
      <ul>
          <li>A Matrícula pode ser realizada após o resultado.</li>  
      </ul>
      <br>
      <button style="background: #fff; border: 0;"><a href="account.php?q=1" class="pull-left btn sub1" style="width: 116px;height: 39px;margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Continuar</b></span></a></button>
      <!-- cleyton -->
  </div>
<?php endif ?>


<!--home start-->
<?php if(@$_GET['q']==1) {

$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
echo  '<div class="panel">
<div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Tópico</b></td><td><b>Total questão</b></td><td><b>Pontuação Mínima</b></td><td><b>Tempo limite</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$title = $row['title'];
	$total = $row['total'];
	$sahi = $row['sahi'];
    $time = $row['time'];
	$eid = $row['eid'];
$q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
$rowcount=mysqli_num_rows($q12);	
if($rowcount == 0){
	echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>60</td><td>3&nbsp;Horas</td>
	<td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Iniciar</b></span></a></b></td></tr>';
}
else
{
echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>60</td><td>3 &nbsp;Horas</td>
	<td><b><a href="account.php?q=7" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Refazer</b></span></a></b></td></tr>';
}
}
$c=0;
echo '</table></div></div>';
// backup do Reiniciar
// <td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Reiniciar</b></span></a></b></td>
}?>
<!--<span id="countdown" class="timer"></span>
<script>
var seconds = 40;
    function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
    document.getElementById('countdown').innerHTML = minutes + ":" +    remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "Buzz Buzz";
    } else {    
        seconds--;
    }
    }
var countdownTimer = setInterval('secondPassed()', 1000);
</script>-->

<!--home closed-->

<!--quiz start-->
<?php
if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
$eid=@$_GET['eid'];
$sn=@$_GET['n'];
$total=@$_GET['t'];
$q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
echo '<div class="panel" style="margin:5%">';
while($row=mysqli_fetch_array($q) )
{
$qns=$row['qns'];
$qid=$row['qid'];
// echo '<b>Questão &nbsp;'.$sn.'&nbsp;::<br /><p  style="text-align: justify;"
echo '<b><p  style="text-align: justify;"

  ">'.$qns.'</p></b><br /><br />';
}
$q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
<br />';

$tipo ='';
if ($tipo == 'redacao') {
  # code...
} else {
  # code...
  $contador = 0;
  while($row=mysqli_fetch_array($q) )
  {
  $option=$row['option'];
  $optionid=$row['optionid'];
  
  if ($_GET['eid'] == '5ec6cdd88c1c9') {
    if ($contador == 0) {
      echo "<textarea rows='30' name='redacao' style='width: 100%;' > </textarea><br><br>";
      # code...
    }
    $contador++;
  } else {
    echo'<input type="radio" name="ans" value="'.$optionid.'"> '.$option.'<br /><br />';
    # code...
  }
  

  }
  $sn_anterior = $sn -1;
  $sn_posterior = $sn +1;

  echo '<br />';
  if (!$sn_anterior == 0) {
    echo '<a href="account.php?q=quiz&step=2&eid='.$eid.'&n='.$sn_anterior.'&t='.$total.'" class="btn btn-primary">Pergunta Anterior</a>';
    
  }
   
  echo'
      
     
      <button type="submit" class="btn btn-success">
        <span class="glyphicon glyphicon-lock" aria-hidden="true">
        </span>&nbsp;Responder
      </button>

    </form>

  </div>';
}

//header("location:dash.php?q=4&step=2&eid=$id&n=$total");
}
//result display
if(@$_GET['q']== 'result' && @$_GET['eid']) 
{
$eid=@$_GET['eid'];
$q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Obrigado por realizar nosso vestibular!!</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">

  <tr style="color:#216AA6"><td>Entraremos em contato em breve com seu resultado! </td><td></td></tr>
';

// while($row=mysqli_fetch_array($q) )
// {

// $s=$row['score'];
// $w=$row['wrong'];
// $r=$row['sahi'];
// $qa=$row['level'];
// echo '<tr style="color:#66CCFF"><td>Total questões</td><td>'.$qa.'</td></tr>
//       <tr style="color:#99cc32"><td>Respostas Corretas &nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
// 	  <tr style="color:red"><td>Respostas Erradas &nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
// 	  <tr style="color:#66CCFF"><td>Pontos&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
// }
// $q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
// while($row=mysqli_fetch_array($q) )
// {
// $s=$row['score'];
// echo '<tr style="color:#990000"><td>Pontuação Geral&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
// }
echo '</table></div>';

}
?>
<!--quiz end-->
<?php
//history start
if(@$_GET['q']== 2) 
{
$q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>S.N.</b></td><td><b>Prova</b></td><td><b>Questões Resolvidas</b></td><td><b>Certas</b></td><td><b>Erradas<b></td><td><b>Pontos</b></td>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$eid=$row['eid'];
$s=$row['score'];
$w=$row['wrong'];
$r=$row['sahi'];
$qa=$row['level'];
$q23=mysqli_query($con,"SELECT title FROM quiz WHERE  eid='$eid' " )or die('Error208');
while($row=mysqli_fetch_array($q23) )
{
$title=$row['title'];
}
$c++;
echo '<tr><td>'.$c.'</td><td>'.$title.'</td><td>'.$qa.'</td><td>'.$r.'</td><td>'.$w.'</td><td>'.$s.'</td></tr>';
}
echo'</table></div>';
}

//ranking start
if(@$_GET['q']== 3) 
{
$q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
echo  '<div class="panel title"><div class="table-responsive">
<table class="table table-striped title1" >
<tr style="color:red"><td><b>Rank</b></td><td><b>Nome</b></td><td><b>Gênero</b></td><td><b>Cursos</b></td><td><b>Pontos</b></td></tr>';
$c=0;
while($row=mysqli_fetch_array($q) )
{
$e=$row['email'];
$s=$row['score'];
$q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
while($row=mysqli_fetch_array($q12) )
{
$name=$row['name'];
$gender=$row['gender'];
$college=$row['college'];
}
$c++;
echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
}
echo '</table></div></div>';}
?>

<script type="text/javascript">
  $('#botao').on('click', function(event) {
        event.preventDefault();
           
        var nomeAluno = $('#nomeAluno').val();

        if ($('#arquivo-1').val() == '' ) {
            alert('Por favor! Anexe o Histórico');
        } else if ($('#arquivo-2').val() == '' ) {            
            alert('Por favor! Anexe o Plano de Curso');
         } else if ($('#arquivo-3').val() == '' ) {            
            alert('Por favor! Anexe a Nota do ENEM');    
        } else {                
            $('#formName').submit();            
            // console.log('OK');
        }
    });


</script>

</div></div></div></div>

<?php 
  include_once('footer.php');
?>