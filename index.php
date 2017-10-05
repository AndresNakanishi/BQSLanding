<?php 

// Pricing
$temporada = '$ 14.000';
$enero = '$ 8.500';
$febrero = '$ 8.000';
$weekends = '$ 7.000';

if (isset($_POST['submit'])) {
	$errors = '';
	$sended = '';
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$cellphone = $_POST['cellphone'];
	$message = $_POST['message'];

	if (!empty($name)) {
		$name = trim($name);
		$name = filter_var($name, FILTER_SANITIZE_STRING);
	} else {
		$errors .= 'Por favor ingresa un nombre <br />';
	}

	if (!empty($surname)) {
		$surname = trim($surname);
		$surname = filter_var($surname, FILTER_SANITIZE_STRING);
	} else {
		$errors .= 'Por favor ingresa un Apellido <br />';
	}

	if (!empty($cellphone)) {
		$cellphone = trim($cellphone);
		$cellphone = filter_var($cellphone, FILTER_SANITIZE_STRING);
	} else {
		$errors .= 'Por favor ingresa un Celular <br />';
	}


	if(!empty($message)){
		$message = htmlspecialchars($message);
		$message = trim($message);
		$message = stripslashes($message);
	} else {
		$errors .= 'Por favor ingresa el mensaje <br />';
	}

	if(!$errors){
		$sentTo = 'lasbrusquitasok@gmail.com';
		$subject = 'Pretemporada 2018 || Consulta de ' . $name;
		$mensaje_preparado = "De: $name $surname \n";
		$mensaje_preparado .= "Celular: $cellphone \n";
		$mensaje_preparado .= "Mensaje: " . $message;

		//mail($sentTo, $subject, $mensaje_preparado);
		$sended = 'true';
	}
}

	require'views/head.view.php';
	require'views/body.view.php';
	require'views/footer.view.php';
 ?>