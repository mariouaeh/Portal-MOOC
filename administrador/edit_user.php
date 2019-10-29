<?php
$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "mooc";
    $cuenta=$_POST['cuenta'];
    $usuario = 'mario';
    $contraseña=$_POST['contraseña'];
	$conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

 $name = $_REQUEST['nombre'];

if($_REQUEST['oper']=='add'){
   
}else if($_REQUEST['oper']=='edit'){
$sql = "UPDATE `usuarios` SET `nombre` = '".$_REQUEST['nombre']."', `cuenta` = '".$_REQUEST['cuenta']."', `email` = '".$_REQUEST['email']."', `contraseña` = '".$_REQUEST['contraseña']."', `tipo` = '".$_REQUEST['tipo']."' WHERE usuarios.id =".$_REQUEST['id'];
   $resultado = $conn->query($sql);
   //header("Location:http://localhost/portal_MOOC/administrador/index.html");

}else if($_REQUEST['oper']=='del'){

	$sql = "DELETE FROM `usuarios` WHERE usuarios.id = ".$_REQUEST['id'];
   $resultado = $conn->query($sql);
   //header("Location:http://localhost/portal_MOOC/administrador");

}

 ?>