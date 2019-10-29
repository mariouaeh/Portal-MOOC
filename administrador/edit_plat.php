<?php  
$id = $_REQUEST['id'];
$name = $_REQUEST['plataforma'];

require_once("./../conexion.php");

if($_REQUEST['oper']=='add'){
	$query = "INSERT INTO `plataforma` (`id`, `plataforma`) VALUES (NULL, '$name')";
	$resultado = $conn->query($query);
   
}else if($_REQUEST['oper']=='edit'){
   $query = "UPDATE `plataforma` SET `plataforma` = '$name' WHERE `plataforma`.`id` =".$id;
   	$resultado = $conn->query($query);

}else if($_REQUEST['oper']=='del'){
  $query = "DELETE FROM `plataforma` WHERE `plataforma`.`id` =".$id;
  $resultado = $conn->query($query);

}
?>