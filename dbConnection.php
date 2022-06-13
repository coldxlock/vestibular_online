<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'vestibular_online');
define('DB_USER', 'root');
define('DB_PASS', '');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (mysqli_connect_errno()) {
      // echo "Conexão falhou";
  die("Conexão falhou: ".mysqli_connect_errno() );
} else {
      // echo "Conectado com sucesso";		
}

?>