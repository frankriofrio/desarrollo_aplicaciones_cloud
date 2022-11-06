	<?php

		//print_r($_SERVER);
		$userA= $_SERVER['HTTP_USER_AGENT'];
		print("<br><br>Navegador:".$userA);

		if (preg_match("/Firefox/i", $userA)) {
			echo "<br><h3>Te encuentras navegando con Firefox</h3>";
		} else {
			echo "<br><h3>Estas navegando en otro navaegador diferente Firefox.</h3>";
		}

        //Probar estudiantes para colocar en formato tabla.
		$arrayEstudiantes = array('Francisco');

		print("<h1 align='center'>Listado de Estudiantes DSwAC</h1>");
		echo('<table align="center" border=1 style="background:yellow">');
		echo '<tr>';   
		echo '<th>nombre</th>';
		echo '</tr>'; 

		if (file_exists('Estudiantes1.xml')) {
			$xml = simplexml_load_file('Estudiantes1.xml');
			print_r($xml);
				
			print("<br><br>Probando con foreach<br>");

			foreach ($xml->estudiante as $key => $estud) {
	            echo "Estudiante1: ".$estud->apellido." con cedula :".$estud->cedula ."<br>";    
	        }

		} else {
			exit('No se puede abrir XML');
		}
	  
			//cargar en la tabla
			foreach ($arrayEstudiantes as $key => $value) {
				echo '<tr>';   
				echo "<td> $key </td>";
				echo '<td>'.$value.'</td>';
				echo '</tr>';
			}
			echo '</table>';  
?>