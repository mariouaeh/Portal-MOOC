<?php 


$id=$_POST['id'];
$user = $_POST['user'];
require_once("./conexion.php");
$sql = "SELECT id FROM `usuarios` WHERE cuenta = '".$user."'";  
 $resultado = $conn->query($sql);
$fila = $resultado->fetch_assoc();
$user_id = $fila['id'];
$sql = "INSERT INTO `cursos_usuarios` (`id`, `id_cursos`, `id_usuarios`) VALUES (NULL, ".$id.", ".$user_id.")";
$resultado = $conn->query($sql);
echo "exito";
?>