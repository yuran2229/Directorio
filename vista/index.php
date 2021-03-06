<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>BuhOjea</title>
	<link rel="stylesheet" href="../modelo/css/index.css"/>
	<link rel="stylesheet" href="../modelo/css/estilos.css">
	<script src="../modelo/js/jquery-3.1.1.min.js"></script>
	<script src="../modelo/js/main.js"></script>
	<link rel="icon" type="image/png" href="../imagenes/logo_sin_fondo.png"/>

	<!---->
	<meta charset="UTF-8" />
	<title>index_slider</title>
	<link rel="stylesheet" type="text/css" href="../imagenes/css/slider/slicebox.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/custom.css" />
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<style type="text/css" >
		.tamanio{
		 width: 360px;
		 height: 420px;
	}
	</style>
    <?php
        require '../controlador/conexionDb.php';
        require '../controlador/scriptCombobox.js';
    ?>
</head>
<body>
	<?php 
		include('encabezado.php');
		include('menu.php');
	 ?>	
	 <div class="container">			

			<div class="wrapper">

				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#" target="_blank" ><img  class="tamanio" src="1.png" alt="img_1"/></a>
						<div class="sb-description">
							<h3>jhanner ureña</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="2.png" alt="img_2"/></a>
						<div class="sb-description">
							<h3>Kevin Enrique Arciniegas </h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="5.png" alt="img_3"/></a>
						<div class="sb-description">
							<h3>rafael ricardo mendieta</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="4.png" alt="img_4"/></a>
						<div class="sb-description">
							<h3>wilmer andres mojica</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="5.png" alt="img_5"/></a>
						<div class="sb-description">
							<h3>yurandier nuñez</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="1.png" alt="img_6"/></a>
						<div class="sb-description">
							<h3>leonardo posada</h3>
						</div>
					</li>
					<li>
						<a href="#" target="_blank"><img class="tamanio" src="2.png" alt="img_7"/></a>
						<div class="sb-description">
							<h3>Atardecer en el mar</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

			</div><!-- /wrapper -->
			
		</div>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
						//	cuboidsRandom : true
							autoplay:true
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	<div class="container">
		<?php
			if (empty($_GET['op'])==false){
				$pagina = $_GET['op'];
				include($pagina.'.html');
			} else {
				# code...
			}
		?>		
	</div>
	<div class="modal-content" id="modal">
		<?php
			if (empty($_GET['log'])==false){
				$pagina = $_GET['log'];
				include($pagina.'.html');
			} else {
				# code...
			}
		?>	
	</div>	

	<script src="../modelo/js/materialize.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
		    var elems = document.querySelectorAll('.modal');
		    var instances = M.Modal.init(elems, options);
		  });		
	</script>

</body>
<footer>
	
</footer>	
</html>