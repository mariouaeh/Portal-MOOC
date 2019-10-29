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
									<a class="nav-link text-white" href="./index.php">Home</a>
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
									<a class="nav-link text-white" href="index.php">Home</a>
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
												<div id="resp"></div>
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
																		<input name="ocupacion" type="text" id="orangeForm-email" class="form-control validate" required>
																		<label data-error="wrong" data-success="right" for="orangeForm-email">Ocupación</label>
																	</div>

																	<div class="md-form mb-4">
																		<input name="nivel" type="text" id="orangeForm-pass" class="form-control validate" required>
																		<label data-error="wrong" data-success="right" for="orangeForm-pass">Nivel de estudio máximo</label>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="md-form mb-5">
																		<input type="text" name="razon" id="name" class="form-control validate" required>
																		<label data-error="wrong" data-success="right" for="orangeForm-name">¿Porque desea aprender temas computacionales? </label>
																	</div>
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

<?php
		//xml version="1.0" encoding="UTF-8";

		$busca=$_POST['busca'];
		$user = $_POST['user_of'];
		$universidad = $_POST['universidad'];
		$plataforma = $_POST['plataforma'];
		require_once("./conexion.php");
						 
					 $salida = '
						<br><br><br>
						';
					if ($universidad == 'UNIVERSIDADES' && $plataforma == 'PLATAFORMAS') {
										//$query = "SELECT * FROM cursos";
								 $query = " SELECT c.id, c.titulo,c.descripcion,c.imagen_url,c.url, p.plataforma,u.universidad,t.tema FROM cursos c , plataforma p, universidad u, tema t WHERE c.id_plataforma=p.id AND c.id_tema = t.id AND c.id_universidad = u.id AND titulo LIKE '%$busca%' ";
										//echo $query;
									$resultado = $conn->query($query);
								if ($resultado->num_rows==0) {
								    $salida.='<h1>Lamentablemente, no hemos identificado Curso con el título  '.$busca.'</h1>';}
								    else{
								    $salida.='<h1>Los resultados de '.$busca.' son : </h1>';	
									while ($fila = $resultado->fetch_assoc()) {
										$salida.='
							
								<div class=" container">
										<div class="cours row d-flex border border">
											<div class=" col-md-4 col-sm-8">
												<h5 >'.$fila['tema'].'</h5>
												<img  class="rounded-lg img-cursos" src="'.$fila['imagen_url'].'" >
													<br><br>
													<p class="desc">'.$fila['universidad'].'</p>
													<p class="desc"> '.$fila['plataforma'].'</p>
												
											</div>
											<div class="col-md-8 col-sm-12>
												<h3>'.$fila['titulo'].'</h3>
												<p class=desc"> '.$fila['descripcion'].'</p>
												<a href="'.$fila['url'].'" target="_blank">Enlace</a><br><br>
												<button id="'.$fila['id'].'" type="button" class="btn bg_uaeh no_registrado" onclick="r_curso('.$fila['id'].')">Agregar</button>
											</div>
										</div>
									</div>';

									//$salida= utf8_encode($salida);
								} 
									
								}
							} 
				elseif ($universidad == 'UNIVERSIDADES') {
						$query = " SELECT c.id, c.titulo,c.descripcion,c.imagen_url,c.url, p.plataforma,u.universidad,t.tema FROM cursos c , plataforma p, universidad u, tema t WHERE c.id_plataforma=p.id AND c.id_tema = t.id AND c.id_universidad = u.id AND titulo  LIKE '%$busca%'  AND p.id = ".$plataforma;
							 //echo $query;
							$resultado = $conn->query($query);
							//$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
				if ($resultado->num_rows==0) {
					$salida.='<h1>Lamentablemente, no hemos identificado Curso con el título  '.$busca.'</h1>';}
					else{
					$salida.='<h1>Los resultados de '.$busca.' son : </h1>';
						while ($fila = $resultado->fetch_assoc()) {
							$salida.='
				
						<div class=" container">
							<div class="cours row d-flex border border">
								<div class=" col-md-4 col-sm-8">
									<h5 >'.$fila['tema'].'</h5>
									<img  class="rounded-lg img-cursos" src="'.$fila['imagen_url'].'" >
										<br><br>
										<p class="desc">'.$fila['universidad'].'</p>
										<p class="desc"> '.$fila['plataforma'].'</p>
									
								</div>
								<div class="col-md-8 col-sm-12">
									<h3>'.$fila['titulo'].'</h3>
									<p class=desc"> '.$fila['descripcion'].'</p>
									<a href="'.$fila['url'].'" target= "_blank">Enlace</a><br><br>
									<button id="'.$fila['id'].'" type="button" class="btn bg_uaeh no_registrado" onclick="r_curso('.$fila['id'].')">Agregar</button>
								</div>
							</div>
						</div>';

						//$salida= utf8_encode($salida);
					 } 
						
				}
			}
				elseif($plataforma == 'PLATAFORMAS'){
						 $query = " SELECT c.id, c.titulo,c.descripcion,c.imagen_url,c.url, p.plataforma,u.universidad,t.tema FROM cursos c , plataforma p, universidad u, tema t WHERE c.id_plataforma=p.id AND c.id_tema = t.id AND c.id_universidad = u.id AND titulo  LIKE '%$busca%'  AND u.id = ".$universidad;
							 //echo $query;
							$resultado = $conn->query($query);
							//$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

					if ($resultado->num_rows>0) {
						while ($fila = $resultado->fetch_assoc()) {
							$salida.='
					<div class=" container">
							<div class="cours row d-flex border border">
								<div class=" col-md-4 col-sm-8">
									<h5 >'.$fila['tema'].'</h5>
									<img  class="rounded-lg img-cursos" src="'.$fila['imagen_url'].'" >
										<br><br>
										<p class="desc">'.$fila['universidad'].'</p>
										<p class="desc"> '.$fila['plataforma'].'</p>
								</div>
								<div class="col-md-8 col-sm-12">
									<h3>'.$fila['titulo'].'</h3>
									<p class=desc"> '.$fila['descripcion'].'</p>
									<a href="'.$fila['url'].'" target="_blank">Enlace</a><br><br>
									<button id="'.$fila['id'].'" type="button" class="btn bg_uaeh no_registrado"  onclick="r_curso('.$fila['id'].')">Agregar</button>
								</div>
							</div>
						</div>';

						//$salida= utf8_encode($salida);
					} 
						
					}
			}   
				elseif($universidad != 'UNIVERSIDADES' && $plataforma != 'PLATAFORMAS'){
						 $query = " SELECT c.id, c.titulo,c.descripcion,c.imagen_url,c.url, p.plataforma,u.universidad,t.tema FROM cursos c , plataforma p, universidad u, tema t WHERE c.id_plataforma=p.id AND c.id_tema = t.id AND c.id_universidad = u.id AND titulo  LIKE '%$busca%'  AND u.id = ".$universidad." AND p.id = ".$plataforma;
							 //echo $query;
							$resultado = $conn->query($query);
							//$resultado = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
					if ($resultado->num_rows>0) {
						while ($fila = $resultado->fetch_assoc()) {
							$salida.='
					<div class=" container">
							<div class="cours row d-flex border border">
								<div class=" col-md-4 col-sm-8">
									<h5 >'.$fila['tema'].'</h5>
									<img  class="rounded-lg img-cursos" src="'.$fila['imagen_url'].'" >
										<br><br>
										<p class="desc">'.$fila['universidad'].'</p>
										<p class="desc"> '.$fila['plataforma'].'</p>
								</div>
								<div class="col-md-8 col-sm-12">
									<h3>'.$fila['titulo'].'</h3>
									<p class=desc"> '.$fila['descripcion'].'</p>
									<a href="'.$fila['url'].'" target="_blank">Enlace</a><br><br>
									<button id="'.$fila['id'].'" type="button" class="btn bg_uaeh no_registrado"  onclick="r_curso('.$fila['id'].')">Agregar</button>
								</div>
							</div>
						</div>';
	//$salida= utf8_encode($salida);
					} 

					}else{
						$salida.="NO HAY DATOS :(";
					}
					}
				else{
						$salida.="NO HAY DATOS :(";
					}

		echo $salida;
?>


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
								let msj = "login incorrecto";
							 $('#resp').html(msj); 
														
							}else if (data == "admin"){
							location.href ="http://localhost/portal_MOOC/administrador/index.html";
							}else{
								secion (data);
							}
						 }
				 });
			});
	});

		function secion(data){
		location.reload();

		}
		function r_curso(id_curso){
			let id = id_curso;
			let user = <?php echo('"'.$_SESSION['cuenta'].'"');?>;
			console.log(id_curso);
			console.log(user);
				 $.ajax({
						type: "POST",
						url: "r_curso.php",
						data: {"id":id, "user":user},
						success: function(){

							document.getElementById(id).disabled = true;
									
						}
				});

		}
	</script>
	 <!-- TemplateEndEditable -->
	<?php
		if ($estado) {
		 ?>
			<script type="text/javascript">
										var no_registrado = document.getElementsByClassName("no_registrado");
										for (var i = 0; i<no_registrado.length; i++) {
										no_registrado[i].classList.remove("no_registrado");
										no_registrado[i].classList.add("registrado");
										}
									</script><?php
		}
		 
		?>
</body> 
</html>