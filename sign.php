<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$gender = $_POST['gender'];
$email = $_POST['email'];
$college = $_POST['college'];
$mob = $_POST['mob'];
$password = $_POST['password'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$gender = stripslashes($gender);
$gender = addslashes($gender);
$email = stripslashes($email);
$email = addslashes($email);
$college = stripslashes($college);
$college = addslashes($college);
$mob = stripslashes($mob);
$mob = addslashes($mob);

$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$indicacao =  $_POST['indicacao'];
$cpf =  $_POST['cpf'];
$tipo_ingresso =  $_POST['tipo_ingresso'];
$plano_curso =  '';
$historico =  '';
$data_cadastro =  date('Y-m-d H:i:s');
// echo $indicacao. "<br>";
// echo $cpf. "<br>";
// echo $tipo_ingresso. "<br>";
// exit();
$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$email' ,'$mob', '$password', '$indicacao','$cpf','$tipo_ingresso','$historico','$plano_curso','$enem','$data_cadastro')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;


if ($tipo_ingresso=='Transferência' || $tipo_ingresso =='Portador de Curso') {
	header("location:account.php?q=12");
	
} else if ($tipo_ingresso =='Nota Enem'   ){
	header("location:account.php?q=11");
	
} else {
	header("location:account.php?q=10");

}

}
else
{
header("location:index.php?q7=Email já está inscrito!!!");
}
ob_end_flush();
?>