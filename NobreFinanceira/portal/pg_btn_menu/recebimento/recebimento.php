<?php 
	session_start(); 
	include_once("../../../conf/config.php");
	verificaSessao();
?>
<html>
	<head>
        <meta charset="UTF-8" />
        <title>Nobre Financeira - Cadastro de Recebimentos </title>
        <link href="../../css/reset.css" type="text/css" rel="stylesheet" />
        <link href="../../css/recebimento.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
        <div id="topo">
            <div id="container-topo">
                <div id="container-opcoes">
                    <ul>
                        <li><a href="../../../conf/unsets.php">SAIR</a></li>
                    </ul>
                </div><!-- Fim container-opcoes-->
                <div class="" id="logo">
                </div><!-- Fim Logo -->
                <div id="menu">
                    <ul>
                        <li class="menu-caixa">
                            <a href="../../index.php">Página Inicial</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="../pagamento/pagamento.php">Pagamento</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="recebimento.php" class="active">Recebimento</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="../lembrar/lembrar.php" id="tremer">Lembre-se!</a>
                        </li>
                    </ul>
                </div> <!-- Fim Menu -->
            </div><!-- Fim container topo-->
        </div> <!-- Fim div topo -->
		<div id="container-informacoes">
			<div id="botao-container">
				<a href="tabela_recebimento.php"> Ver Recebimentos </a>
			</div>
			<h2>Cadastro de Recebimento</h2>
			<div id="form-div">  
				<!--**********************************Começa o Formulário***********************************************-->
				<form method="post" action="action_recebimento.php" id="fContato" > 
					<fieldset id="formadepagamento">              
						<legend>
							<h1> Tipo do Recebimento</h1>
						</legend>
						<select name="tFormpag" style="border: solid #999999 1px;">
							<option>Selecione uma opção</option>
							<option disabled> </option>
							<?php 
								$sql = "SELECT * FROM `tb_tiporecebimento`";
								$opcao = mysqli_query($con, $sql);
								
								if(mysqli_num_rows($opcao) > 0){	
									while($dados = mysqli_fetch_assoc($opcao)){
										echo '<option value="'.utf8_encode($dados["tipoRecebimento"]).'">'.utf8_encode($dados["tipoRecebimento"]).'</option>';
									}
								}							
							?>
						</select>
							<!--<input type="radio" name="tFormpag" value="Dinheiro" id="cFormpag" checked="checked"/><label for="cFormpag" class="formPagTab" required> Dinheiro </label>
							<input type="radio" name="tFormpag" value="Cheque" id="cFormadepag" checked="checked"/><label for="cFormadepag" class="formPagTab" required> Cheque</label>
							<input type="radio" name="tFormpag" value="Cartão de Crédito ou Débito" id="cFormpagamen" checked="checked" required/><label for="cFormpagamen" class="formPagTab"> Cartão de Crédito ou Débito </label>
							<input type="radio" name="tFormpag" value="Boleto Bancário" id="cFormapaga" checked="checked" required/><label for="cFormapaga" class="formPagTab"> Boleto Bancário</label>-->
					</fieldset>
					<fieldset id="DiadoPagamento">   <br />         
						<p> 
							<h1>Dia do Recebimento</h1> <br />
							<input type="date" name="tDia" id="cDia" required/> 
						</p>
					</fieldset><br />
					<fieldset id="valoraPagar">              
						<p>
							<label for="cTot"> <h1>Valor do Recebimento</h1> <br /> R$ </label>
							<input type="text" name="tTot" id="cTot" placeholder="Digite números e pontos" required/>
						</p><br />
					</fieldset>
					<fieldset id="buttonEnviar">              
						<p> 
							<input type="submit" value="Enviar" id="btnEnviar"> 
						</p>
					</fieldset>
				</form>
				<!--**********************************termina o Formulário***********************************************-->
				
			</div><!--Form div-->
		</div><!--Fim container-informações-->
	</body>
</html>