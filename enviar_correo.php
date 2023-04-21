<?php
if (isset($_POST['remitente']) && isset($_POST['mensaje'])) {
	$remitente = $_POST['remitente'];
	$mensaje = $_POST['mensaje'];
	$destinatario = "gonzalez.erick.cb37@gmail.com";
	$asunto = "Petición";
	$headers = "From: $remitente\r\n";

	if (mail($destinatario, $asunto, $mensaje, $headers)) {
        mail($destinatario, $asunto, $mensaje, $headers);
		echo "Correo electrónico enviado correctamente.";
	} else {
		echo "Error al enviar el correo electrónico.";
	}
}
?>