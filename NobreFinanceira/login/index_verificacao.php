<?php 
	session_start(); 
	include_once('../conf/config.php');
	
	
	/*Colhendo as variáveis do método $_POST*/
	$login = $_POST['email'];
	$senha = $_POST['password'];
	/*****************************************/ 
	
	
	$result = mysqli_query($con, "SELECT * FROM `tb_usuario` WHERE `usuario` = '$login' AND `SENHA` = '$senha'");
	if(mysqli_num_rows($result) > 0){
		$_SESSION['usuario'] = $login;
		$_SESSION['senha'] = $senha;
		header("Location: ../portal/index.php");
	}
	else {
	echo '
		<html>
			<head>
				<meta charset="UTF-8">
				<title>login</title>
				<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
				<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Lobster|Open+Sans+Condensed:300" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="css/default.css" type="text/css" />
				<link rel="stylesheet" href="css/animate.css" type="text/css" />

			</head>
			<body style="padding-top: 10%;">
				<section class="bounceIn animated">
					<div class="logo bounce animated">
						<h1 style="color: #fff;font-family: Kaushan Script, cursive;">Nobre Financeira - Portal</h1>
					</div>
					<form method="POST" action="index_verificacao.php" enctype="multipart/form-data">
						<div class="inputs">
							<div class="alert-erro tada animated" role="alert"> 
								<strong>ERRO:</strong> Email ou senha incorretos. 
							</div></br>
							<div class="email">
								<input type="email" id="email" name="email" autocomplete="off" required/>
								<label for="email">E-mail</label>
							</div>
							<div class="password">
								<input type="password" id="password" name="password" autocomplete="off" required/>
								<label for="password">Senha</label>
							</div>
						</div>
					<div class="buttons">
						<input type="submit" class="botao" value="Logar">
						<a href="javascript:void(0)">Esqueceu a senha ?</a>
					</div>
					</form>
				</section>
			</body>
		</html>
	';
}
?>
