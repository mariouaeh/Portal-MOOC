<?php
require_once("./conexion.php");
$cuenta =$_POST['cuenta'];
$usuario = 'admin';
$contraseña=$_POST['contraseña'];
  if($cuenta=="admin" && $contraseña=="admin")
  {
    
  }
  $sql = "SELECT cuenta, contraseña, tipo FROM usuarios WHERE cuenta = '$cuenta' AND contraseña = '$contraseña'" ;
  $resultado = $conn->query($sql);
       //$resultado = mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
  if ($resultado->num_rows==0) {
      echo("false");
    }
  else{
      function secion (){
        session_start();
        $_SESSION['cuenta'] = $_POST['cuenta'];
        $secion = "true";
        echo($_SESSION['cuenta']);
      }
      secion();               
    }
$conn->close();
  ?>