<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php 

require_once("head.html");
require_once("header.html");
 ?>	
<!-- //header -->

<!-- //header -->
		
<!-- banner -->
<section class="banner w3pvt-banner" id="home">
	<div class="container">
		<div class="banner-text">
			<div class="slider-info">
				<div class="w3pvt-logo">
					<h2>Descubre BusApp</h2>
					<h2>La plataforma de segumiento de buses</h2>
					<p class="mt-3"> "~ Gente, Buses, BusApp ~ "</p>
					<img src="images/cab1.png" alt="" class="img-fluid mt-md-5"/>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->

<!-- about -->
<section class="about py-sm-5 py-4" id="about">
	<div class="container py-lg-5">
		<div class="row about-grids">
			<div class="col-lg-5">
				<h6 class="mt-4">Conoces alguna ruta que no tenemos ?</h6>
				<h4 class="mt-3">Ayudanos a mejorar!!</h4>
				<p class="mt-sm-4 mt-3">Busapp está en constante desarrollo y depende de reportes de usuarios.</p>
				<p class="mt-sm-4 mt-3">Mediante el siguiente formulario puedes enviar tu recomendacion de nuevas rutas a agregar, nuestros administradores revisarán tu petición y agregaremos este nuevo lugar en cuanto podamos. </p>
			</div>
			<div class="col-lg-6 col-md-6 mt-lg-0 mt-4">
				<div class="padding">
					<form action="acciones\recomendaciones.php" method="post">
						<h5 class="mb-3">Recomendación de nueva ruta</h5>
						<div class="form-style-agile">
							<input placeholder="Nombre de la recomendacion" name="nom_rec" type="text" required="">
							<input placeholder="Descripción" name="desc_rec" type="text" required="">
							<input placeholder="Source(From)" type="text" name="fue_rec" required="">
							<input placeholder="Destination(To)" type="text" name="dest_rec" required="">
							<input placeholder="Tipo de bus" type="text" name="tibu_rec" required="">
							
<!--
							<select name="tibu_rec">
							  <option value="0">Que tipo de bus es?</option>
							  <option value="STIP">SITP</option>
							  <option value="Transmilenio">Transmilenio</option>
							  <option value="Bus clasico">Busesito clásico</option>
							</select>
							
							-->
							<!--<input placeholder="Password" name="password" type="password" required=""> -->
							<button class="book-btn btn submit">Recomendar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //about -->

<!-- //what we do -->

<!--
<section class="services py-5" id="services">
	<div class="container py-lg-5 py-3">
		<div class="row service-grid-grids text-center">
				<div class="col-lg-4 col-md-6 service-grid service-grid1">
					<div class="service-icon">
						<span class="fa fa-car"></span>
					</div>
					<h4 class="mt-3">Fast and Safe</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
					<div class="service-icon">
						<span class="fa fa-user"></span>
					</div>
					<h4 class="mt-3">Experienced Drivers</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				
				<div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
					<div class="service-icon">
						<span class="fa fa-paper-plane"></span>
					</div>
					<h4 class="mt-3">Online Booking</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
					<div class="service-icon">
						<span class="fa fa-search"></span>
					</div>
					<h4 class="mt-3">GPS Searching</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid4 mt-5">
					<div class="service-icon">
						<span class="fa fa-car"></span>
					</div>
					<h4 class="mt-3">Safe Journey</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				<div class="col-lg-4 col-md-6 service-grid service-grid6 mt-5">
					<div class="service-icon">
						<span class="fa fa-cogs"></span>
					</div>
					<h4 class="mt-3">24/7 Cab Service</h4>
					<p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
				</div>
				
		</div>
	</div>		
</section>
-->
<!-- what we do -->

<!-- tarrifs -->
<section class="tarrifs py-5" id="tarrifs">
	<div class="container py-md-5 text-center">
		<h1>Consulta de rutas</h1>
			<br>
			<br>
		<div class="row tarrifs-grid">

			<div class="col-lg-4 col-md-6 text-center">
				<img src="images/taxi1.jpg" alt="" class="img-fluid"/>
				<div class="tarrif-info">
					<li><a href="acciones\consultaruta.php?tibu_ruta=Transmilenio"><h4 class="my-3">Transmilenio</h4></a></li>
					<p class="para_vl"></p>
					
				</div>		
			</div>		
			<div class="col-lg-4 col-md-6 text-center">
				<img src="images/taxi2.jpg" alt="" class="img-fluid"/>
				<div class="tarrif-info">
					<li><a href="acciones\consultaruta.php?tibu_ruta=SITP" ><h4 class="my-3">SITP</h4></a></li>
					<p class="para_vl"></p>
				
				</div>		
			</div>		
			<div class="col-lg-4 col-md-6 text-center mt-lg-0 mt-5">
				<img src="images/taxi3.jpg" alt="" class="img-fluid"/>
				<div class="tarrif-info">
					<li><a href="acciones\consultaruta.php?tibu_ruta=Bus clasico" ><h4 class="my-3">Bus Clasico</h4></a></li>
					<p class="para_vl"></p>
					
				</div>		
			</div>		
		</div>		
	</div>		
</section>
<!-- //tarrifs -->

<!-- stats 
<section class="stats py-5" id="stats">
	<div class="container py-sm-3">	
		<div class="row">
			<div class="col-sm-4 col-6 text-center">
				<span class="fa mr-1 fa-users"></span>
				<h4>10,000+</h4>
				<p>Passengers</p>
			</div>	
			<div class="col-sm-4 col-6 text-center">
				<span class="fa mr-1 fa-car"></span>
				<h4>1200</h4>
				<p>Cab Drivers</p>
			</div>	
			<div class="col-sm-4 col-6 mt-sm-0 mt-4 text-center">
				<span class="fa mr-1 fa-map"></span>
				<h4>500</h4>
				<p>Cab Routes</p>
			</div>		
		</div>		
	</div>		
</section>
-->
<!-- //stats -->

<!-- call us 
<section class="customer-call">
	<div class="container">
		<div class="row">
			<div class="col-md-8 py-sm-5 py-4 mt-3">
				<h4 class="mt-2">24 Hours 7 Days a Week</h4>
				<p>Call Us Now</p>
				<h2><span class="fa mr-1 fa-phone"></span> +1(12) 366 411 4999</h2>
				<p class="mt-4">Nam arcu mauris, tincidunt sed convallis non, egestas ut lacus. Cras sapien urna, varius malesuada ut varius consequat, hendrerit nisl. Aliquam vestibulum, odio non ullamcorper malesuada totam rem aperiam, eaque ipsa quae.</p>
			</div>		
			<div class="col-lg-3 offset-lg-1 col-md-4 col-sm-6 col-8 pt-md-5 mt-lg-3">
				<img src="images/agent-18762.png" alt="">
			</div>		
		</div>		
	</div>		
</section>
-->
<!-- //call us -->

<!--/app-->
<section class="mobile-app-sec py-5" id="app">
	<div class="container py-sm-3">
		<!--/mobile-app -->
		<div class="row inner-sec-wthree-agileits">
			<div class="col-lg-12 pt-lg-5 app-info text-center">
				<h3 class="tittle mob pb-sm-4">Eres administrador <br>De Busapp?</h3>
				<p class="para_vl">Ingresa y revisa diferentes sugerencias que han realizado las personas, borra, edita o crea nuevas rutas, controla Busapp </p>
				<div class="app-devices">
					<a href="acciones\consultarecomendaciones.php" class="mr-3">
						<img src="https://storage.googleapis.com/segfelipe/app.png" alt="">
					</a>
					<a href="acciones\consultarutas.php">
						<img src="https://storage.googleapis.com/segfelipe/app1.png" alt="">
					</a>
					<div class="clearfix"> </div>
				</div>
			</div>
			
			<!--//mobile-app -->
		</div>
	</div>
</section>
<!--//app-->

<!-- footer -->
<?php 
require_once("footer.php")

 ?>
<!-- //footer -->

</body>
</html>