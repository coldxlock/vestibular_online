<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT * FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$tipo_ingresso = $row['tipo_ingresso'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;


// echo $tipo_ingresso;
// exit();

if ($tipo_ingresso=='Transferência' || $tipo_ingresso =='Portador de Curso') {
	header("location:account.php?q=12");
	
} else if ($tipo_ingresso =='Nota Enem'   ){
	header("location:account.php?q=11");
	
} else {
	header("location:account.php?q=10");

}

}
else
header("location:$ref?w=Usuário ou Senha errado");


?>