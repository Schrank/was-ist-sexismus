<?php
if (!isset($_POST) || empty($_POST)) {
	require 'add_template.phtml';
} else {
	require(__DIR__ . '/../../config.php');
	if (isset($_POST['quote'])) {
		$sth = $db->prepare("INSERT INTO quotes (quote, explanation, location) VALUES (:quote, :explanation, :location)");
		$success = (int)$sth->execute(array(
											 ':quote' => isset($_POST['quote']) ? $_POST['quote'] : '',
											 ':explanation' => isset($_POST['explanation']) ? $_POST['explanation'] : '',
											 ':location' => isset($_POST['location']) ? $_POST['location'] : ''
									));
	}

	mail('blechschmidt@fabian-blechschmidt.de', 'Sexismus', var_export($_POST, true));
	$uri = $_SERVER['HTTP_HOST'];
	$protocol = $_SERVER['SERVER_PORT'] == 80 ? 'http://' : 'https://';
	header("Location: $protocol$uri?success=$success");
	die();
}
