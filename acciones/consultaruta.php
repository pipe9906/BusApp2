<?php 
require_once("headeradmin.php")

 ?>

<table class="table table-striped">
  	
		<thead>
		<tr>

			<th>Id ruta</th>
			<th>Nombre ruta</th>
			<th>Descripcion</th>
			<th>Fuente</th>
			<th>Destino</th>
			<th>Tipo de bus</th>

			<th> <a href="consultarecomendaciones.php"> <button type="button" class="btn btn-info">Consultar recomendaciones</button> </a> </th>
      <th> <a href="crearuta.php"> <button type="button" class="btn btn-info">Crear rutas</button> </a> </th>

		</tr>
		</thead>

  		<?php

      $tibu_ruta= ($_GET['tibu_ruta']);

      include ("conexion.php");
      $sentencia="SELECT * FROM rutas WHERE tibu_ruta = '$tibu_ruta' ";
      $resultado=mysqli_query($con,$sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
        	echo "<td>"; echo $filas['id_ruta']; echo "</td>";
          echo "<td>"; echo $filas['nom_ruta']; echo "</td>";
          echo "<td>"; echo $filas['desc_ruta']; echo "</td>";
          echo "<td>"; echo $filas['fue_ruta']; echo "</td>";
          echo "<td>"; echo $filas['dest_ruta']; echo "</td>";
          echo "<td>"; echo $filas['tibu_ruta']; echo "</td>";


          echo "<td> <a href='borraruta.php?id_ruta=".$filas['id_ruta']."''><button type='button' style='width:85px; height:30px' class='btn btn-danger'>Borrar</button></a> </td>";
        echo "</tr>";
      }

      ?>
</table>