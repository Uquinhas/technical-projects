<?php 
	ob_start();
	
	$servidor = 'localhost';
	$usuario = 'root';
	$senha = '';
	$banco = 'db_nobrefinanceira';
	// Conecta-se ao banco de dados MySQL
	$con = mysqli_connect($servidor, $usuario, $senha, $banco);
	// Caso algo tenha dado errado, exibe uma mensagem de erro
	if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
	$select = mysqli_select_db($con, $banco) or die("Sem acesso ao Banco de Dados, entre em contato com o Desenvolvedor.");
	
	
	
	
	
//*****************************************************************************************************************************************
//***************************************** Funções e Ações *******************************************************************************
//*****************************************************************************************************************************************
	
	
	//Funções para inclução na página.
	function bibliotecaBootstrap(){ //Inclui o bootstrap que auto-redimensiona o site
		echo'
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		';
	}
	
	$tremer = '
			<style>
			#tremer{
				transition: all 0.5s;
				animation: mymove 2s infinite;
				-webkit-animation: mymove 2s infinite;
			}
			.mymove{
				-webkit-animation: mymove 2s infinite; /* Safari 4.0 - 8.0 */
				animation: mymove 2s infinite;
				transition: all 0.5s;
			}
			@keyframes mymove {
				0%   {
					-webkit-transform: rotateZ(0deg);
					-ms-transform: rotateZ(0deg);
					transform: rotateZ(0deg);
					}
				20%   {
					-webkit-transform: rotateZ(-3deg);
					-ms-transform: rotateZ(-3deg);
					transform: rotateZ(-3deg);
				}
				25%   {-webkit-transform: rotateZ(3deg);
						-ms-transform: rotateZ(3deg);
						transform: rotateZ(3deg);}
				30%   {-webkit-transform: rotateZ(-3deg);
						-ms-transform: rotateZ(-3deg);
						transform: rotateZ(-3deg);}
				35%		{-webkit-transform: rotateZ(3deg);
						-ms-transform: rotateZ(3deg);
						transform: rotateZ(3deg);}
				40%   {
					-webkit-transform: rotateZ(-3deg);
					-ms-transform: rotateZ(-3deg);
					transform: rotateZ(-3deg);
				}
				45%   {-webkit-transform: rotateZ(3deg);
						-ms-transform: rotateZ(3deg);
						transform: rotateZ(3deg);}
				50%   {-webkit-transform: rotateZ(-3deg);
						-ms-transform: rotateZ(-3deg);
						transform: rotateZ(-3deg);}
				55%   {
					-webkit-transform: rotateZ(3deg);
					-ms-transform: rotateZ(3deg);
					transform: rotateZ(3deg);
				}
				60%   {-webkit-transform: rotateZ(-3deg);
						-ms-transform: rotateZ(-3deg);
						transform: rotateZ(-3deg);}
				65%   {-webkit-transform: rotateZ(3deg);
						-ms-transform: rotateZ(3deg);
						transform: rotateZ(3deg);}
				70%		{-webkit-transform: rotateZ(-3deg);
						-ms-transform: rotateZ(-3deg);
						transform: rotateZ(-3deg);}
				75%  {
					-webkit-transform: rotateZ(3deg);
					-ms-transform: rotateZ(3deg);
					transform: rotateZ(3deg);
				}
				80% {
					-webkit-transform: rotateZ(-3deg);
					-ms-transform: rotateZ(-3deg);
					transform: rotateZ(-3deg);
				}
				85%   {-webkit-transform: rotateZ(3deg);
						-ms-transform: rotateZ(3deg);
						transform: rotateZ(3deg);}
				100%   {-webkit-transform: rotateZ(0deg);
						-ms-transform: rotateZ(0deg);
						transform: rotateZ(0deg);}
			}
			</style>';
	
	//Adiciona um dia em formato de data pra variável timestamp
	$timestamp = strtotime("+1 day");
	
	//Adiciona a data atual +1 dia
	$amanha = date('d-m-Y', $timestamp);
	$hoje = date('d-m-Y');
	
	//Buscando todas as datas do banco de dados
	$sql = "SELECT * FROM `tb_pagamento` ORDER BY `id`";
		$query = mysqli_query($con, $sql);
		if(mysqli_num_rows($query) > 0){
			while ($dados = mysqli_fetch_assoc($query)){
		
			//Transformando a data que vem do banco de dados para a data brasileira
			$ano = substr($dados['dataPagamento'],0,4);
			$mes = substr($dados['dataPagamento'],5,2);
			$dia = substr($dados['dataPagamento'],8,2);
			
			//Transforma para a data BR
			$dataBR = $dia."-".$mes."-".$ano;
				if((($dataBR == $amanha) OR ($dataBR == $hoje)) && ($dados['pago'] == 0)){
					echo $tremer;
				}
			}
		}
//********************************************************************************************************************************		
		function verificaSessao(){
			if((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)){
				
				unset($_SESSION['usuario']);
				unset($_SESSION['senha']);
				header('Location: /NobreFinanceira/index.php');
			}
			$usuario = $_SESSION['usuario'];
		}
?>
<!--tirando dúvidas em www.w3schools.com, www.devmedia.com.br, www.stackoverflow.com-->
