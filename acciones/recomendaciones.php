<?php
	


		require_once "conexion.php";

		$nom_rec= ($_POST['nom_rec']);
		$desc_rec= ($_POST['desc_rec']);
		$fue_rec= ($_POST['fue_rec']);
		$dest_rec= ($_POST['dest_rec']);
		$tibu_rec= ($_POST['tibu_rec']);

	
		$sentencia="INSERT INTO recomendaciones VALUES ('', '$nom_rec', '$desc_rec', '$fue_rec', '$dest_rec', '$tibu_rec')";
		mysqli_query($con,$sentencia);




?>

<script type="text/javascript">
	alert("Tu recomendacion fue enviada, los administradores la revisaran");
	window.location.href="../index.php";
</script>

