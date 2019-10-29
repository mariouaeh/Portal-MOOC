<?php 
$servername = "localhost";
$username = "root";
	$password = "";
	$dbname = "mooc";
$id=$_POST['id'];
$user = $_POST['user'];
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
  if($conn->connect_error){
    die("Conexión fallida: ".$conn->connect_error);
  }

 $sql = "SELECT id FROM `usuarios` WHERE cuenta = '".$user."'";  
$resultado = $conn->query($sql);
$fila = $resultado->fetch_assoc();
$user_id = $fila['id']; 
$sql = "DELETE FROM `cursos_usuarios` WHERE `cursos_usuarios`.`id_cursos` = ".$id." and `cursos_usuarios`.`id_usuarios` = ".$user_id."";  
 $resultado = $conn->query($sql);
echo "exito";
?>