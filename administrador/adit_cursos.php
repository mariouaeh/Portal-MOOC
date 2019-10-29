<?php 
$id = $_REQUEST['id'];
$titulo = $_REQUEST['titulo'];
$universidad = $_REQUEST['id_universidad'];
$plataforma = $_REQUEST['id_plataforma'];
$tema = $_REQUEST['id_tema'];
$descripcion = $_REQUEST['descripcion'];
$imagen = $_REQUEST['imagen_url'];
$url = $_REQUEST['url'];

require_once("./../conexion.php");

if($_REQUEST['oper']=='add'){
	$query = "INSERT INTO `cursos` (`id`, `titulo`, `id_plataforma`, `id_tema`, `descripcion`, `imagen_url`, `url`, `id_universidad`) VALUES (NULL, '$titulo', '$plataforma' , '$tema', '$descripcion', '$imagen', '$url','$universidad')";
	$resultado = $conn->query($query);
  echo $query;
   
}else if($_REQUEST['oper']=='edit'){
   $query = "UPDATE `cursos` SET `titulo` = '$titulo', `id_universidad` = '$universidad', `id_plataforma` = '$plataforma', `id_tema` = '$tema', `descripcion` = '$descripcion', `imagen_url` = '$imagen', `url` = '$url' WHERE `cursos`.`id` =".$id;
   	$resultado = $conn->query($query);
     echo $query;

}else if($_REQUEST['oper']=='del'){
  $query = "DELETE FROM `cursos` WHERE `cursos`.`id` =".$id;
  $resultado = $conn->query($query);

}


 ?>