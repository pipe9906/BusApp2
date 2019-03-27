<?php
	


		require_once "conexion.php";

		$nom_ruta= ($_POST['nom_ruta']);
		$desc_ruta= ($_POST['desc_ruta']);
		$fue_ruta= ($_POST['fue_ruta']);
		$dest_ruta= ($_POST['dest_ruta']);
		$tibu_ruta= ($_POST['tibu_ruta']);

	
		$sentencia="INSERT INTO rutas VALUES ('', '$nom_ruta', '$desc_ruta', '$fue_ruta', '$dest_ruta', '$tibu_ruta')";
		mysqli_query($con,$sentencia);




?>

<script type="text/javascript">
	alert("Ruta registrada");
	window.location.href="../index.php";
</script>