<?php
session_start();
session_destroy();
//header('Location: http://localhost/portal_MOOC/');
  ?>
<center>
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
                        <h3>sección cerrada </h3>
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