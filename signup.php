<?php
require_once("./conexion.php");
$name=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$email=$_POST['email'];
$contraseña=$_POST['contraseña'];
$apellidos =$_POST['apellidos'];
$ocupacion =$_POST['ocupacion'];
$nivel =$_POST['nivel'];
$razon =$_POST['razon'];

  $sql = "INSERT INTO usuarios (`id`, `nombre`, `cuenta`, `email`, `contraseña`, `tipo`,apellidos,ocupacion,nivel_estudio,razon) VALUES (NULL, '$name', '$cuenta', '$email', '$contraseña', 'registrado', '$apellidos', '$ocupacion','$nivel','$razon')";

  $resultado = $conn->query($sql);

  //echo "usuario registrado exitosamente";
  ?><center>
    <html>
      <head>
         <meta charset="utf-8">
         <title>Mostrar Ventane Modal de forma Automático</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
         <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
         <script>
            $(document).ready(function()
            {
               $("#mostrarmodal").modal("show");
            });

            function redireccioinar(){
              window.location="index.php";
            }
          </script>
      </head>
      <body>
         <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <h3>USUARIO REGISTRADO EXITOSAMENTE </h3>
                 </div>
                 <div class="modal-footer">
                  <center>
                <a href="#" data-dismiss="modal" onclick="redireccioinar()" class="btn btn-danger">Cerrar</a>
                  </center>
                 </div>
            </div>
         </div>
      </div>


      </body>
    </html>
  </center>
  <?php
  //header("Location:http://localhost/portal_MOOC/");
  $conn->close();
?>