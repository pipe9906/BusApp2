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

		$sentencia="insert into rutas values ('', '$nom_ruta', '$desc_ruta', '$fue_ruta', '$dest_ruta', '$tibu_ruta')";
	
		
		try 
		{
				mysql_query($sentencia);

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}






?>
