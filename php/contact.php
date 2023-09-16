<?php

$user = "c2192176";
$pass = "ni32goGAku";
$host = "c2192176.ferozo.com";

$connection = mysqli_connect($host, $user, $pass);

$nombre = $_POST['nombre'];
$fecha = $_POST['date'];
$fecha = $_POST['date'];
$celular = $_POST['celular'];
$mail = $_POST['email'];
$consulta = $_POST['consulta'];
$acepta = $_POST['checkbox'];
$submit = $_POST['submit'];



$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "consulta: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'consultas@elhorreoapart.com.ar';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto,($mensaje), $header);

header("Location:index.html");
?>