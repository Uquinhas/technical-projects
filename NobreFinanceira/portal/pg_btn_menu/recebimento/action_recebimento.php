<?php 
	session_start(); 
	include_once('../../../conf/config.php');
	verificaSessao();
	
	$tipo = utf8_decode($_POST['tFormpag']);
	$data = str_replace('-', '', $_POST['tDia']); //Tratamento da variável. Transforma 9999-88-77 em 99998877.
	$valor = str_replace('.', ',', $_POST['tTot']);
	
	$sql = "INSERT INTO `tb_recebimento`(`tipoRecebimento`, `dataRecebimento`, `valorRecebimento`) VALUES ('$tipo', '$data', '$valor')";
	
	if(mysqli_query($con, $sql)){
		
		$local= "\"location.href='/NobreFinanceira/portal/pg_btn_menu/recebimento/recebimento.php'\"";
		echo '
			<script> setTimeout(function(){ alert("Cadastrado com sucesso!");}, 0);
				window.setTimeout('.$local.', 500);
			</script>
		';
	}
?>
