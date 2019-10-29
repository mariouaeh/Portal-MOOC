<?php  
$id = $_REQUEST['id'];
$name = $_REQUEST['tema'];

require_once("./../conexion.php");

if($_REQUEST['oper']=='add'){
	$query = "INSERT INTO `tema` (`id`, `tema`) VALUES (NULL, '$name')";
	$resultado = $conn->query($query);
   
}else if($_REQUEST['oper']=='edit'){
   $query = "UPDATE `tema` SET `tema` = '$name' WHERE `tema`.`id` =".$id;
   	$resultado = $conn->query($query);

}else if($_REQUEST['oper']=='del'){
  $query = "DELETE FROM `tema` WHERE `tema`.`id` =".$id;
  $resultado = $conn->query($query);

}
?>