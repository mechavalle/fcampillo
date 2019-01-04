<?php
global $_REQUEST;
$response = array('error'=>'');
$contact_email = 'info@fernandacampillo.com';

// type
$type = $_REQUEST['type'];
// parse
parse_str($_POST['data'], $post_data);

$user_name = stripslashes(strip_tags(trim($post_data['username'])));
$user_email = stripslashes(strip_tags(trim($post_data['email'])));
$user_msg =stripslashes(strip_tags(trim( $post_data['message'])));

if (trim($contact_email)!='') {
	$subj = 'Mensaje de la página web (contacto)';
	$msg = $subj." \r\nNombre: $user_name \r\nE-mail: $user_email \r\nMensaje: $user_msg";

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


echo json_encode($response);
die();
?>