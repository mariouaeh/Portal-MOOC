<?php
$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "mooc";
	$conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
?>