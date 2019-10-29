<?php  
$id = $_REQUEST['id'];
$name = $_REQUEST['universidad'];

require_once("./../conexion.php");

if($_REQUEST['oper']=='add'){
	$query = "INSERT INTO `universidad` (`id`, `universidad`) VALUES (NULL, '$name')";
	$resultado = $conn->query($query);
   
}else if($_REQUEST['oper']=='edit'){
   $query = "UPDATE `universidad` SET `universidad` = '$name' WHERE `universidad`.`id` =".$id;
   	$resultado = $conn->query($query);

}else if($_REQUEST['oper']=='del'){
  $query = "DELETE FROM `universidad` WHERE `universidad`.`id` =".$id;
  $resultado = $conn->query($query);

}
?>