<?php
	


		require_once "conexion.php";

		$id_ruta= ($_GET['id_ruta']);

	
		$sentencia="DELETE FROM rutas WHERE id_ruta = '$id_ruta' ";
		mysqli_query($con,$sentencia);




?>

<script type="text/javascript">
	alert("Ruta borrada");
	window.location.href="../index.php";
</script>