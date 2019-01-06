<?php
global $_REQUEST;
$response = "ok";
$contact_email = 'info@fernandacampillo.com';
//$contact_email = 'il.diabolo@gmail.com';
//$post_data['nombre']." ".$post_data['apellidos']

//echo "<pre>".print_r($_REQUEST,true)."</pre>";
//exit();
/*
// type
$type = $_REQUEST['type'];
// parse
parse_str($_POST['data'], $post_data);
*/

#echo "Error->".$_REQUEST['nombre'];
#exit();


$user_name = stripslashes(strip_tags(trim($_REQUEST['nombre'])));
$telefono = stripslashes(strip_tags(trim($_REQUEST['telefono'])));
$user_email = stripslashes(strip_tags(trim($_REQUEST['email'])));
$fecha = stripslashes(strip_tags(trim($_REQUEST['fecha'])));
$ciudad = stripslashes(strip_tags(trim($_REQUEST['ciudad'])));
$user_msg =stripslashes(strip_tags(trim($_REQUEST['quenecesitas'])));
$ciudadevento =stripslashes(strip_tags(trim($_REQUEST['ciudadevento'])));
$serviciosevento =stripslashes(strip_tags(trim($_REQUEST['serviciosevento'])));

if (trim($contact_email)!='') {
	$subj = 'Mensaje de la página web (presupuesto)';
	$msg = $subj." \r\nNombre: $user_name \r\nTelefono: $telefono \r\nE-mail: $user_email \r\nFecha: $fecha \r\nCiudad: $ciudad \r\nTipo Evento que busca: $user_msg \r\nCiudad del evento: $ciudadevento \r\nServicios que busca: $serviciosevento";

	$head = "Content-Type: text/plain; charset=\"utf-8\"\n"
		. "X-Mailer: PHP/" . phpversion() . "\n"
		. "Reply-To: $user_email\n"
		. "To: $contact_email\n"
		. "From: $user_email\n";

	if (!@mail($contact_email, $subj, $msg, $head)) {
		$response = 'Error enviando mensaje!';
	}
} else
	$response = 'Error enviando mensaje!';


echo $response;
die();
?>