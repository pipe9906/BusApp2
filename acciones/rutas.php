<br>
<br>
<br>
<br>
<br>
<br>

<?php
	


		require_once "conexion.php";

		$nom_ruta= ($_POST['nom_ruta']);
		$desc_ruta= ($_POST['desc_ruta']);
		$fue_ruta= ($_POST['fue_ruta']);
		$dest_ruta= ($_POST['dest_ruta']);
		$tibu_ruta= ($_POST['tibu_ruta']);

		echo $nom_ruta;

		$sentencia="insert into rutas (id_ruta,nom_ruta,desc_ruta,fue_ruta,dest_ruta,tibu_ruta) values  ( NULL , '$nom_ruta', '$desc_ruta', '$fue_ruta', '$dest_ruta', '$tibu_ruta')";

			

// Perform a query, check for error
if (!mysqli_query($con,$sentencia))
  {
  echo("Error description: " . mysqli_error($con));
  }

mysqli_close($con);


			

	
	






?>
