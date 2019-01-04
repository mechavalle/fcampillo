<?php
global $_REQUEST;
$response = array('error'=>'');
//$contact_email = 'info@fernandacampillo.com';
$contact_email = 'il.diabolo@gmail.com';
//$post_data['nombre']." ".$post_data['apellidos']

//echo "<pre>".print_r($_REQUEST,true)."</pre>";
//exit();
/*
// type
$type = $_REQUEST['type'];
// parse
parse_str($_POST['data'], $post_data);
*/


$user_name = stripslashes(strip_tags(trim($_REQUEST['nombre']." ".$_REQUEST['apellidos'])));
$telefono = stripslashes(strip_tags(trim($_REQUEST['telefono'])));
$user_email = stripslashes(strip_tags(trim($_REQUEST['email'])));
$piezas = stripslashes(strip_tags(trim($_REQUEST['piezas'])));


if (trim($contact_email)!='') {
	$subj = 'Mensaje de la página web (agenda)';
	$msg = $subj." \r\nNombre: $user_name \r\nTelefono: $telefono \r\nE-mail: $user_email \r\nPiezas: $piezas";

	$head = "Content-Type: text/plain; charset=\"utf-8\"\n"
		. "X-Mailer: PHP/" . phpversion() . "\n"
		. "Reply-To: $user_email\n"
		. "To: $contact_email\n"
		. "From: $user_email\n";

	if (!@mail($contact_email, $subj, $msg, $head)) {
		$response['error'] = 'Error enviando mensaje!';
	}
} else
	$response['error'] = 'Error enviando mensaje!';


//echo json_encode($response);
die();
?>