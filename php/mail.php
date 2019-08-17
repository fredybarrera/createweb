<?php
if ((isset($_POST['name'])) && (strlen(trim($_POST['name'])) > 0)) {
  $name = stripslashes(strip_tags($_POST['name']));
} else {$name = 'No name entered';}
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
  $email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No email entered';}
if ((isset($_POST['phone'])) && (strlen(trim($_POST['phone'])) > 0)) {
  $phone = stripslashes(strip_tags($_POST['phone']));
} else {$phone = 'No phone entered';}
if ((isset($_POST['plan'])) && (strlen(trim($_POST['plan'])) > 0)) {
  $plan = stripslashes(strip_tags($_POST['plan']));
} else {$plan = 'No plan entered';}
if ((isset($_POST['mensaje'])) && (strlen(trim($_POST['mensaje'])) > 0)) {
  $mensaje = stripslashes(strip_tags($_POST['mensaje']));
} else {$mensaje = 'No mensaje entered';}
ob_start(); 
// ob_start(); sirve para indicarle a PHP que se ha de iniciar el buffering de la salida, 
// es decir, que debe empezar a guardar la salida en un bufer interno, en vez de enviarla al cliente. 
// De modo que, aunque se escriba código HTML con echo o directamente fuera del código PHP, 
// no se enviará al navegador hasta que se ordene explícitamente. O eventualmente, 
// hasta que se acabe el procesamiento de todo el archivo PHP. 
?>
<html>
<head>
<style type="text/css">
</style>
</head>
<body>
<table width="550" border="1" cellspacing="2" cellpadding="2">
  <tr bgcolor="#eeffee">
    <td>Name</td>
    <td><?=$name;?></td>
  </tr>
  <tr bgcolor="#eeeeff">
    <td>Email</td>
    <td><?=$email;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Phone</td>
    <td><?=$phone;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Plan</td>
    <td><?=$plan;?></td>
  </tr>
  <tr bgcolor="#eeffee">
    <td>Mensaje</td>
    <td><?=$mensaje;?></td>
  </tr>
    <tr bgcolor="#eeffee">
    <td>Fecha</td>
    <td><?=date('d/m/Y', time());?></td>
  </tr>
</table>
</body>
</html>
<?php
$body = ob_get_contents(); //Devuelve el contenido del búfer de salida "ob_start();" y se lo asigna a la variable "$body"

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/html";

$para = 'info@createweb.cl';
$asunto = 'Contacto Pagina Web';

mail($para, $asunto, $body, $header);

?>
