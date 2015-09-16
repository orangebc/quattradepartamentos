<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$agendarcita = $_POST['agendarcita'];
$mensaje = $_POST['mensaje'];
$para = 'ediaz@ideasinmobiliarias.com';
$titulo = 'CONTACTO CLIENTE QUATTRA DEPARTAMENTOS';
$header = 'From: ' . $nombre;
$msjCorreo = "NOMBRE CLIENTE: $nombre   MAIL:$email    TELEFONO: $telefono    AGENDAR CITA: $agendarcita    MENSAJE:$mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
window.location.href = 'http://www.quattradepartamentos.mx';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

<body>
</body>
</html>