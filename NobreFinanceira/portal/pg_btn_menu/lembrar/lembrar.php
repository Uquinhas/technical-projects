<?php 
	session_start(); 
	include_once('../../../conf/config.php'); 
	verificaSessao();
?>
<html>
	<head>
        <meta charset="UTF-8" />
        <title>Nobre Financeira - Lembre-se!</title>
        <link href="../../css/reset.css" type="text/css" rel="stylesheet" />
        <link href="../../css/lembrar.css" rel="stylesheet" type="text/css" />
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
                            <a href="../recebimento/recebimento.php">Recebimento</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="lembrar.php" class="active" id="tremer">Lembre-se!</a>
                        </li>
                    </ul>
                </div> <!-- Fim Menu -->
            </div><!-- Fim container topo-->
        </div> <!-- Fim div topo -->
        <p><em><strong>Não se esqueça do vencimento!!</strong></em></p>
        <div id="container-informacoes">
			<div id="div-tabela-dados">
            	<table border="2" cellpadding="2">
					<tr>
                    	<td><h1>  </h1></td>
                        <td><h1>  </h1></td>&nbsp;
                        <td><h1>  </h1></td>
						<td><h1>  </h1></td>
                    </tr>
                	<tr class="tr-tabela2">
                        <td class="td-tabela2">
                        	<h1> Descrição </h1>
                        </td>&nbsp;
                        <td class="td-tabela2">
                        	<h1> Valor a ser pago </h1>
                        </td>&nbsp;
                        <td class="td-tabela2">
                        	<h1> Data </h1>
							<td class="td-tabela2" width="100">
                        	<h1> Pago? </h1>
                        </td>
                        </td>
                    </tr>
                    <tr>
                    	<td><h1>  </h1></td>
                        <td><h1>  </h1></td>&nbsp;
                        <td><h1>  </h1></td>
						<td><h1>  </h1></td>
                    </tr>
                    <tr>
                    	<td><h1>  </h1></td>
                        <td><h1>  </h1></td>&nbsp;
                        <td><h1>  </h1></td>
						<td><h1>  </h1></td>
                    </tr>
                    <?php
						$sql = "SELECT * FROM `tb_pagamento` WHERE `pago` = 0 ORDER BY `dataPagamento`";
						$query = mysqli_query($con, $sql);
						if(mysqli_num_rows($query) > 0){
							while($dados = mysqli_fetch_assoc($query)){
								$ano = substr($dados['dataPagamento'],0,4);
								$mes = substr($dados['dataPagamento'],5,2);
								$dia = substr($dados['dataPagamento'],8,2);
								$data = $dia."/".$mes."/".$ano;
								
								echo'<tr class="tr-tabela">
										<td class="td-tabela">
											<h2> '.utf8_encode($dados['tipoPagamento']).' </h2>
										</td>
										<td class="td-tabela">
											<h2> R$'.$dados['valorPagamento'].' </h2>
										</td>&nbsp;
										<td class="td-tabela">
											<h2> '.$data.' </h2>
										</td>
										<td class="td-tabela3" width="100">
											<form method="post" name="btnPagar" action="action_lembrar.php">
												Confirmar Pagamento <button type="submit" value="'.$dados['id'].'" name="btnPagar" class="btnPagar"  />
											</form>
										</td>
									</tr>
								';
							}
						}
						mysqli_close($con);
                    ?>
                </table>
            </div>
		</div><!--Fim container-informações-->
	</body>
</html>