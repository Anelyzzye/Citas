<!DOCTYPE html>
<html>
<head>
	<title>Estados</title>
</head>
<body>
	<table border="2" cellpadding="3">
		<?php 
		 
		 	echo "<tr>";
		 	echo "<th>Clave</th>";
		 	echo "<th>Estados</th>";
		 	echo "</tr>";
		 	foreach ($resultado as $object)
		 	{
		 		$id_estado=$object->idestado;
		 		$es_tado=$object->estado;
		 		echo "<tr>";
		 		echo "<td>$id_estado</td>";
		 		echo "<td>$es_tado</td>";
		 		echo "</tr>";
		 	}
		 ?>
	</table>

</body>
</html>