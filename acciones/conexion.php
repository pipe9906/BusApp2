<?php


		$host = "localhost";
		$user = "root";
		$pw = "UY834ouXPDsy2X";
		$db = "busapp";

		$con = mysql_connect($host, $user, $pw) or die ("No se pudo concetar a base de datos");
		mysql_select_db($con, $db)or die ("no se encontro la base de datos");
		

 
?>