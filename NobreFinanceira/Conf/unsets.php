<?php
	session_start();
	unset($_SESSION['usuario']);
	unset($_SESSION['senha']);
	header('Location: /NobreFinanceira/index.php');
?>
