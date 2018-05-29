<?php
$toEmail = "luizupdate@gmail.com";
$subject = "Mensaje enviado desde Smartcenter (Formulario)";
$mailHeaders = "From: " . $_POST["nombre"] . "<". $_POST["email"] .">\r\n";

$mensaje .= "Informacion del Contacto\n";
$mensaje .= "------------------------\n";
$mensaje .= "Nombres		:".$_POST["nombre"]."\n";
$mensaje .= "Email			:".$_POST["email"]."\n";
$mensaje .= "Telefono		:".$_POST["telefono"]."\n";
$mensaje .= "Mensaje		:".$_POST["mensaje"]."\n";

if(mail($toEmail, $subject, $mensaje, $mailHeaders)) {
	print "<div class='alert alert-success' role='alert'>Email Enviado Exitosamente.</div>";
} else {
	print "<div class='alert alert-danger' role='alert'>Problema al enviar el correo, intentelo m&aacute;s tarde.</div>";
}

?>