<?php
	print_r($_REQUEST); 
	print "<p>Su nombre es $_REQUEST[Usuario]</p>\n";
	print("<br>La clave ingresada es". $_REQUEST['Clave']);
	print("<h1>La Edad es ". $_REQUEST['Edad']);
	print("</h1>");
	print("<br><br>Fin del ejercio");
	

    print("<br><h3>Se imprime los Headers: </h3><br>");
	var_dump($_SERVER);
 	
 	print("<br><br>");
 	echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>"; 
    echo "<b>El valor de USER AGENT es:</b> {$_SERVER['HTTP_USER_AGENT']}<br>"; 
	print("<br>");

    print("<br><h3>Se usa la función getallheaders: </h3><br>");

?>
<?php
	foreach (getallheaders() as $name => $value) {
	    echo "$name: $value <br>";
	}
?> 
<h3>Demostrando Header Http con Lenguaje Php</h3>
<?php
	$header = apache_request_headers();
  
	foreach ($header as $headers => $value) {
 	   echo "$headers: $value <br/>\n";
 	   echo"<marquee>Este texto se mueve de derecha a izquierda</marquee>";
	}
?>