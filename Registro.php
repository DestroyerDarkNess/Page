<!DOCTYPE html>
<html>
<head>
	<title>Registrados</title>
</head>
<body>

	<style type="text/css">
		
		back
	</style>

</body>
</html>
<?php

$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$correo = $_POST["Correo"];
$contraseña1 = $_POST["Contraseña"];
$contraseña2 = $_POST["Contraseña Nuevamente"];

echo $nombre;
echo '<br>';

echo $apellido;
echo '<br>';

echo $correo;
echo '<br>';

echo $contraseña1;
echo '<br>';

echo $contraseña2;
echo '<br>';

?>
