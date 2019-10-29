
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Portal MOOC</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="./css/mdb.min.css" rel="stylesheet">
<!-- Your custom styles (optional) -->
<!--<link href="css/style.css" rel="stylesheet">-->
<link rel="stylesheet" type="text/css" href="./css/Mystyles.css">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<!-- TemplateBeginEditable name="MetaTags" --> <!-- TemplateEndEditable -->
<meta name="keywords" content="UAEH,universidad de excelencia,top public university,university excellence">
<meta name="author" content="Universidad Autónoma del Estado de Hidalgo"> 
<link rel="stylesheet" href="https://www.uaeh.edu.mx/css/style-uaeh-internas_ex.css">
<!-- TemplateBeginEditable name="head" -->  <!-- TemplateEndEditable -->
     <!--Google analitics-->
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-33872262-1', 'auto');
      ga('send', 'pageview');
    
    </script>
    <!--Google analitics-->
    
    <!-- tracking systems -->
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"xP59k1a0CM00Or", domain:"uaeh.edu.mx",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=xP59k1a0CM00Or" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
    
    <meta name="verify-a" content="5a9f35505dbe007c9a6c" />
</head>

<body> 
    <div id="filter-panel" class="collapse filter-panel bot_bus">
       <form class="form-inline" action="/buscador/" method="get" accept-charset="UTF-8">
          <div class="form-group">  
              <input type="text" class="form-control input-sm" id="pref-search" name="q" placeholder="Buscar micrositios o páginas">   
          </div>        
      </form>  
    </div>

    <div id="filter-panelTrans" class="collapse filter-panel bot_bus">
      <div id="google_translate_element"></div>
      <script type="text/javascript">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'ar,de,el,en,fr,hi,it,ja,la,pt,ru,sv,tr,uk,zh-CN,zh-TW', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true, gaTrack: true, gaId: 'UA-33872262-1'}, 'google_translate_element');
          }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div>

    <div class="sidebarUAEH">
        <div id="content-menu-lateral">
        </div>
    </div>
 
    <div class="conten-all"> 
        <div class="row fondomenutoplat">
            <div class="col-xs-1 col-sm-1 visible-xs">
               <a  id="btn1" class="sidebtn btn-gira sidemenu-bar"><span></span></a>
            </div>
            <div class="col-xs-8 col-sm-8 visible-xs"></div>
            <div class="col-xs-1 col-sm-1 visible-xs">
                <button type="button" class="btn icon_bus" data-toggle="collapse" data-target="#filter-panel" onclick="javascript:CambiarEstilo2();">
                        <span class="fa fa-search fa-inverse fa-lg" id="btn-busqueda2"></span>
                </button>
            </div>
            <div class="col-xs-1 col-sm-1 visible-xs">
                <button type="button" class="btn icon_bus" data-toggle="collapse" data-target="#filter-panelTrans" onclick="javascript:CambiarEstilo();">
                        <span class="fa fa-globe fa-inverse fa-lg" id="btn-idioma2"></span>
                        </button>
            </div>
        </div>
        
        <!-- MENU 1 -->
        <div id="content-menu-top"></div> 
        <!-- FIN MENU 1 -->  
        <!-- TITULO -->
      <div class="row row-centered row_titulo justify-content-center"">
              <div id="titulo_micrositio">

              <!-- TemplateBeginEditable name="titulo" -->
              <center>
              <h2> Portal Web sobre MOOC de Computación</h2>
            </center>
            <!-- TemplateEndEditable -->
              </div>
      </div>
      <!-- END TITULO --> 
        <div class="">
         <div class="">
           <!--Navbar -->
           <?php
            require_once("./is_login.php");
            if ($estado) {
              ?>
                <nav class=" navbar navbar-expand-lg gris navbar-dark fixed-top">
                  <a class="nav-link text-white" href="#">Home</a>
                      <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item avatar">
                          <a class="nav-link p-2 " href="perfil.php" >
                            <i class="fas fa-portrait fa-2x "  data-toggle="tooltip"title="Sign Up"></i>
                            <p>Perfil</p>
                          </a>
                        </li>
                        <li class="nav-item avatar">
                          <a class="nav-link p-2 " href="./logout.php" >
                            <i class="fas fa-user-times fa-2x " id="bnt_login" src data-toggle="tooltip" title=""></i>
                            <p>Cerrar</p>
                          </a>
                        </li>
                      </ul>
                </nav> 
                <?php
            }else{
            ?>
                <nav class=" navbar navbar-expand-lg gris navbar-dark fixed-top ">
                  <a class="nav-link text-white" href="#">Home</a>
                      <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item avatar">
                          <a class="nav-link p-2 " href="#" data-toggle="modal" data-target="#modalRegisterForm">
                            <i class="fas fa-user-plus fa-2x "  data-toggle="tooltip"title="registrate"></i>
                            <p>Registrate</p>
                          </a>
                        </li>
                        <li class="nav-item avatar">
                          <a class="nav-link p-2 " href="#" data-toggle="modal" data-target="#modalLoginForm">
                            <i class="fas fa-user fa-2x " id="bnt_login" src data-toggle="tooltip" title="login"></i>
                            <p>Acceso</p>
                          </a>
                        </li>
                      </ul>
                </nav><?php } ?>

                  <!--/Navbar -->
                   <!--Form login-->
                    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog " role="document">
                      <div class="modal-content">
                        <div class="modal-header text-center">
                          <h4 class="modal-title w-100 font-weight-bold">Ingresa tus datos :</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form method="post" id="formulario">
                        <div class="modal-body mx-3">
                          <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input name="cuenta" type="text" id="defaultForm-email" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="defaultForm-email">Cuenta</label>
                          </div>

                          <div class="md-form mb-4">
                            <i class="fas fa-lock prefix grey-text"></i>
                            <input name="contraseña" type="password" id="defaultForm-pass" class="form-control validate" required>
                            <label data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña</label>
                          </div>

                        </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <input type="button" id="btn-ingresar" class="btn bg_uaeh" value="Ingresar" />
                            </div>
                        </form>
                        <center>
                        <div id="resp" style="color: red"></div>
                      </center>
                      </div>
                    </div>
                  </div>
                  <!--/Form login-->
                    <!-- Form Registrer-->
                          <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header text-center">
                                    <h4 class="modal-title w-100 font-weight-bold">Ingresa tus datos</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                <form   action="signup.php" method="post"> 
                                <div class="modal-body row ">
                                  <div class="col-md-6">
                                  <div class="md-form mb-5">
                                    <input type="text" name="nombre" id="name" class="form-control validate" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Nombre</label>
                                  </div>
                                  <div class="md-form mb-5">
                                    <input name="apellidos" type="text" id="orangeForm-name" class="form-control validate" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-cuenta">Apellidos</label>
                                  </div>
                                  <div class="md-form mb-5">
                                    <select name="ocupacion" class="form-control validate" required>
                                      <option >Ocupación</option>
                                      <option value="estudiante">Estudiante</option>
                                      <option value="docente">Docente</option>
                                      <option value="profesional">Profesional</option>
                                      <option value="otro">Otro</option>
                                    </select>
                                  </div>

                                  <div class="md-form mb-4">
                                    <select name="nivel" class="form-control validate" required>
                                      <option>Nivel de estudio máximo</option>
                                      <option value="primaria">Primaria</option>
                                      <option value="secundaria">Secundaria</option>
                                      <option value="bachillerato">Bachillerato</option>
                                      <option value="técnico">Técnico</option>
                                      <option value="licenciatura">Licenciatura</option>
                                      <option value="maestría">Maestría</option>
                                      <option value="doctorado">Doctorado</option>
                                    </select>  
                                  </div>
                                  <div class="md-form mb-5">
                                    <p>¿Porque desea aprender temas computacionales?</p>
                                    <textarea  name="razon" id="name" class="form-control validate" placeholder="" required>Estudio Computación o área afín, etc.
                                    </textarea> 
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="md-form mb-5">
                                    <input name="email" type="email" id="orangeForm-email" class="form-control validate" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-cuenta">Correo electrónico</label>
                                  </div>
                                  <div class="md-form mb-5">
                                    <input name="cuenta" type="text" id="orangeForm-email" class="form-control validate" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-email">Cuenta</label>
                                  </div>

                                  <div class="md-form mb-4">
                                    <input name="contraseña" type="password" id="orangeForm-pass" class="form-control validate" required>
                                    <label data-error="wrong" data-success="right" for="orangeForm-pass">contraseña</label>
                                  </div>
                                </div>
                                </div>
                                    <div class="modal-footer d-flex justify-content-center">
                                      <input class="btn bg_uaeh"  type="submit" name="registrate" value="Registrate">
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                    <!-- /Form Registrer-->   
        </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="contenido">
                    <!-- TemplateBeginEditable name="contenido" -->
                  <div class="view" >
                    <br><br><br><br>
                    <center>
                    <div class="container h-100" >
                      <div class="d-flex h-100 text-center align-items-center">
                        <div class="w-100 text-white">
                          
                          <form class="" action="./buscar.php" method="post" target="">
                              <input name="busca" class=" mx-auto form-control search" type="text" placeholder="ingresa el título" aria-label="Título" ">
                              <br>
                              <br>

                        <div class="row d-flex justify-content-center">
                          <div class="">
                            <?php 
                              require_once("./conexion.php");

                              ?>
                              <select name="universidad" class="custom-select">
                                <option selected>UNIVERSIDADES</option>
                                 <?php
                                  $sql = "SELECT * FROM `universidad`";
                                   $resultado = $conn->query($sql);
                                       if ($resultado->num_rows>0) {
                                        while ($fila = $resultado->fetch_assoc()) {
                                          ?> <option value="<?php echo $fila['id']  ?>"><?php echo $fila['universidad']  ?></option>
                                          <?php  
                                      }
                                    }
                                  ?> 
                              </select>
                          </div>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="">
                               <select name="plataforma" class="custom-select">
                                <option selected>PLATAFORMAS</option>
                                 <?php
                                  $sql = "SELECT * FROM `plataforma`";
                                   $resultado = $conn->query($sql);
                                       if ($resultado->num_rows>0) {
                                        while ($fila = $resultado->fetch_assoc()) {
                                          ?> <option value="<?php echo $fila['id']  ?>"><?php echo $fila['plataforma']  ?></option>
                                          <?php  
                                      }
                                    }
                                  ?> 
                              </select>
                          </div>
                        </div>
                              <br><br>
                              <input type="text" name="user_of" id="user_of" value="user" style="display: none; ">
                              <input  class="btn bg_uaeh btn-rounded btn-lg" type="submit" value="Buscar">
                          </form>
                        </div>
                      </div>
                    </div>
                  </center>
                  </div>
                  <div class="margin_explocion " style="background: #EAE3D8">
                      <div class=" container">
                        <h1 class =" text-center margin_title">Búsqueda por Temas</h1>
                        <!--Section: Features v.4-->
                        <div class="marginSectionTop_2 d-flex justify-content-center">
                          <!--Grid row-->
                          <div class="row d-flex align-items-center">
                            <!--Grid column-->
                            <div class="col-md-6  ">
                              <!--Grid row-->
                               <div class=" row mb-2 section_sm tema">
                                <div class="col-12 text-left ">
                                  <a class ="temas" href="./1_tema.php?id=1">Algoritmos y estructuras de 
                                  datos 
                                </a>
                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                               <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left ">
                                <a class ="temas" href="./1_tema.php?id=2">Base de datos</a>

                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                               <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=3">Ciberseguridad</a>
                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                               <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=4">Diseño web</a>
                                </div>
                              </div>
                              <!--Grid row-->
                            </div>
                            <!--Grid column-->
                            <div class="col-md-6 ">
                              <!--Grid row-->
                              <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=5">Games</a>
                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                              <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=6">Introducción a la computación </a>
                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                              <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=7">Internet de las cosas </a>
                                </div>
                              </div>
                              <!--Grid row-->
                              <!--Grid row-->
                              <div class="row mb-2 section_sm tema">
                                <div class="col-12 text-left">
                                  <a class ="temas" href="./1_tema.php?id=8">Lenguajes de programación </a>
                                </div>
                              </div>
                              <!--Grid row-->
                            </div>
                            <!--Grid column-->
                          </div>
                          <!--Grid row-->
                        </div>
                        <!--/Section: Features v.4-->
                      </div>
                    </div>

        <!-- TemplateEndEditable -->
                </div>           
            </div>
        </div>       
      </div>
       <!-- Footer -->
       <div id="content-footer"></div>
       <!-- FIN  -->
        
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://www.uaeh.edu.mx/js/funciones.js"></script>

<!-- TemplateBeginEditable name="page-scripts" -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.js"></script>
<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
<script type="text/javascript" src="js/myjs.js"></script>
<script>
$('#content-menu-lateral').load('./content-menu-lateral_ex.html');
$('#content-menu-top').load('./content-menu-top_ex.html');
$('#content-footer').load('./content-footer_ex.html');
</script>
<script type="text/javascript">
$(document).on('ready',function(){       
    $('#btn-ingresar').click(function(){
        var url = "login.php";
        $.ajax({                        
           type: "POST",                 
           url: url,                     
           data: $("#formulario").serialize(), 
           success: function(data)             
           {
            if(data == "false"){
              let msj = "usuario no registrado";
             $('#resp').html(msj);
             console.log(data);          
            }else if (data == "admin"){
              console.log(data);
            location.href ="./administrador/index.html";
            }else{
              console.log(data);
              secion ();
            }
           }
       });
    });
});

function secion(){
location.reload();

}

</script>
</body> 
</html>
