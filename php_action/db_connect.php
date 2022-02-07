<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbName = "crud";

$connect = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão ".mysqli_connect_error();
endif;
  ?> 