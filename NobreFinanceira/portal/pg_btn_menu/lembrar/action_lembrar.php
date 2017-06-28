<?php 
	session_start();
	include_once('../../../conf/config.php');
	verificaSessao();
	
	$idBanco = $_POST['btnPagar'];
	
	$sql = "UPDATE `tb_pagamento` SET `pago` = 1 where `id` = '$idBanco'";
	
	if(mysqli_query($con, $sql)){
		
		$local= "\"location.href='/NobreFinanceira/portal/pg_btn_menu/lembrar/lembrar.php'\"";
		echo '
			<script> setTimeout(function(){ alert("Pagamento cadastrado como pago!");}, 0);
				window.setTimeout('.$local.', 500);
			</script>
		';
	}
?>
