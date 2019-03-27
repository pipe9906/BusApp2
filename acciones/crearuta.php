				
<?php 
require_once("headeradmin.php")

 ?>

					<form action="rutas.php" method="post">
						<h5 class="form-style">Nueva ruta</h5>
						<div class="form-style-agile">
							<input placeholder="Nombre de la ruta" name="nom_ruta" type="text" required="">
							<input placeholder="Descripción" name="desc_ruta" type="text" required="">
							<input placeholder="Source(From)" type="text" name="fue_ruta" required="">
							<input placeholder="Destination(To)" type="text" name="dest_ruta" required="">
							<!--<input placeholder="Tipo de bus" type="text" name="tibu_ruta" required="">
							-->

							<select name="tibu_ruta">
							  <option value="0">Que tipo de bus es?</option>
							  <option value="STIP">SITP</option>
							  <option value="Transmilenio">Transmilenio</option>
							  <option value="Bus clasico">Busesito clásico</option>
							</select>
							
							<!--<input placeholder="Password" name="password" type="password" required=""> -->
							<button class="book-btn btn submit">Crear</button>
						</div>
					</form>