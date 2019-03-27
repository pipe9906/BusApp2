<?php 
require_once("headeradmin.php")

 ?>

<table class="table table-striped">
  	
		<thead>
		<tr>

			<th>Id rec</th>
			<th>Nombre ruta</th>
			<th>Descripcion</th>
			<th>Fuente</th>
			<th>Destino</th>
			<th>Tipo de bus</th>
      <th> <a href="consultarutas.php"> <button type="button" class="btn btn-info">Consultar rutas</button> </a> </th>


		</tr>
		</thead>

  		<?php

      include ("conexion.php");
      $sentencia="SELECT * FROM recomendaciones";
      $resultado=mysqli_query($con,$sentencia);
      while($filas=mysqli_fetch_assoc($resultado))
      {
        echo "<tr>";
        	echo "<td>"; echo $filas['id_ruta']; echo "</td>";
          echo "<td>"; echo $filas['nom_rec']; echo "</td>";
          echo "<td>"; echo $filas['desc_rec']; echo "</td>";
          echo "<td>"; echo $filas['fue_rec']; echo "</td>";
          echo "<td>"; echo $filas['dest_rec']; echo "</td>";
          echo "<td>"; echo $filas['tibu_rec']; echo "</td>";


          echo "<td> <a href='borrarrec.php?id_rec=".$filas['id_rec']."''><button type='button' style='width:85px; height:30px' class='btn btn-danger'>Borrar</button></a> </td>";
        echo "</tr>";
      }

      ?>
</table>