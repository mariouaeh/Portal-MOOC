<?php 
session_start();
require_once("./conexion.php");
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Portal MOOC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" type="text/css" href="./css/Mystyles.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TemplateBeginEditable name="MetaTags" --> <!-- TemplateEndEditable -->
  <meta name="keywords" content="UAEH,universidad de excelencia,top public university,university excellence">
  <meta name="author" content="Universidad Autónoma del Estado de Hidalgo"> 
    <link rel="stylesheet" href="http://www.uaeh.edu.mx/css/style-uaeh-internas_ex.css">
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
   <!-- <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=xP59k1a0CM00Or" style="display:none" height="1" width="1" alt="" /></noscript>-->
    <!-- End Alexa Certify Javascript -->
    
    <!--<meta name="verify-a" content="5a9f35505dbe007c9a6c" />-->
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
        <div id="content-menu-lateral"></div>
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
                <nav class=" navbar navbar-expand-lg gris navbar-dark fixed-top ">
                  <a class="nav-link text-white" href="index.php">Home</a>
                </nav> 
                <?php
            }else{
            ?>
                <nav class=" navbar navbar-expand-lg gris navbar-dark fixed-top ">
                  <a class="nav-link text-white" href="index.php">Home</a>
                </nav><?php } ?>
				<div class="row">
            		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                		<div id="contenido">
                    <!-- TemplateBeginEditable name="contenido" -->
                    <center>
                    	<h1>Bienvenido <?php echo $user; ?></h1>
                    </center>
                    <div class="row d-flex">
                    	<div class="col-md-4 col-sm-8 border border">
                    		<h3>Lista de cursos guardados</h3>
                    		<?php 
                    			$sql = "SELECT id FROM `usuarios` WHERE cuenta = '".$user."'";  
								$resultado = $conn->query($sql);
								$fila = $resultado->fetch_assoc();
								$user_id = $fila['id'];
								$sql = "SELECT a.id, a.titulo FROM cursos a , cursos_usuarios b WHERE a.id = b.id_cursos AND b.id_usuarios=".$user_id;
								$resultado = $conn->query($sql);
								 if ($resultado->num_rows>0) {
							           while ($fila = $resultado->fetch_assoc()) {
							             ?>
							             <button class="btn btn-secondary btn-lg btn-block" id= <?php echo $fila['id']; ?> onClick="curso(<?php echo $fila['id']; ?>)"> <h3>
							            <?php echo $fila['titulo'];?>
							            </h3></button ><?php   
							        }
							      }
                    		 ?>
                    		
                    	</div>
                    	<div class="col-8">
                    		<h1>Tu curso : </h1>
                    		<div id="curso"></div>
                    		<?php
                    			$sql = "SELECT id FROM `usuarios` WHERE cuenta = '".$_SESSION['cuenta']."'";  
								$resultado = $conn->query($sql);
								$fila = $resultado->fetch_assoc();
								$user_id = $fila['id'];
			  		    $query = "SELECT c.id, c.titulo,c.descripcion,c.imagen_url,c.url, p.plataforma,u.universidad,t.tema FROM cursos c , plataforma p, universidad u, tema t, cursos_usuarios b  WHERE c.id_plataforma=p.id AND c.id_tema = t.id AND c.id_universidad = u.id AND c.id = b.id_cursos AND b.id_usuarios= ".$user_id;			
			                    //echo $query;
			           $resultado = $conn->query($query);
			              if ($resultado->num_rows>0) {
			                while ($fila = $resultado->fetch_assoc()) {
			                  ?>
			              <div id="<?php  echo $fila['id']; ?>c" class="container" style="display: none;">
			                  <div class="cours row d-flex border border">
			                    <div class=" col-md-3 col-sm-8">
			                      <h5 ><?php  echo $fila['tema']; ?></h5>
			                      <img  class="rounded-lg img-cursos" src="<?php  echo $fila['imagen_url']; ?>">
			                        <br>
			                        <p class="desc"><?php  echo $fila['universidad']; ?></p>
			                        <p class="desc"><?php  echo $fila['plataforma']; ?> </p>
			                      
			                    </div>
			                    <div class="col-md-6  col-sm-12">
			                      <h3><?php  echo $fila['titulo']; ?></h3>
			                      <p class=desc"> <?php  echo $fila['descripcion']; ?></p>
			                      <a href="<?php  echo $fila['url']; ?>" target="_blank">Enlace</a><br><br>
			                      <button id="<?php  echo $fila['id']; ?>" type="button" class="btn bg_uaeh " onclick="b_curso(<?php  echo $fila['id']; ?>)">Borrar</button>
			                    </div>
			                  </div>
			                </div><?php
			               //$salida= utf8_encode($salida);
			              } 
			  	}
			  	?>

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
    
<script>
  $('#content-menu-lateral').load('./content-menu-lateral_ex.html');
  $('#content-menu-top').load('./content-menu-top_ex.html');
  $('#content-footer').load('./content-footer_ex.html');
</script>
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
  <script type="text/javascript">
  	function curso(id){
  		id_c = id+"c"
  		console.log(id_c);
  		let el = document.getElementById(id_c); //se define la variable "el" igual a nuestro div
		if(el.style.display == 'none') {
			el.style.display = 'block';
		}else{
			el.style.display = 'none';

		} //damos un atributo display:none que 
}


  function b_curso(id){
  			let user = <?php echo('"'.$_SESSION['cuenta'].'"');?>;
  		   $.ajax({
            type: "POST",
            url: "b_curso.php",
            data: {"id":id, "user":user},
            success: function(){
            console.log("exito");
            location.reload();     
            }
        });

  }					
  </script>
   <!-- TemplateEndEditable -->
</body> 
</html>
