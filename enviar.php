<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>formulario de contacto-mensaje enviado</title>
</head>
<body>
	<center>
		<?php 
$myemail = 'fr259905@gmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>
		<h1>contacto</h1>
		 <form action="coompletado.html" method="POST">
		<form method="post" action="enviar.php">
			<input type="text" name="nombre" placeholder="NOMBRE"> 
			<input type="email" name="email" placeholder="CORREO">
			<br>
			<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
			<br>
			<input type="submit" value="ENVIAR">
		</form>
	</center>
</body>
</html>
