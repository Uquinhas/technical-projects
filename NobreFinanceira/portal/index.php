<?php 
	session_start(); 
	include_once("../conf/config.php");
	error_reporting(0);
	verificaSessao();
?>
<!doctype html>
<html>
	<head>
        <meta charset="utf-8" />
        <title>Nobre Financeira - Bem Vindo ao Portal!</title>
        <link href="css/reset.css" type="text/css" rel="stylesheet" />
        <link href="css/index_estilo_posicao.css" type="text/css" rel="stylesheet" />
        <link href="css/Banner.css" rel="stylesheet" type="text/css" />
        <link href="css/index_estilo_hover.css" rel="stylesheet" type="text/css">
        <script type="text/jscript" src="js/Banner.js"></script>
    </head>
	<body>
        <div id="topo">
            <div id="container-topo">
                <div id="container-opcoes">
                    <ul>
                        <li><a href="../conf/unsets.php">SAIR</a></li>
                    </ul>
                </div><!-- Fim container-opcoes-->
                <div class="" id="logo">
                </div><!-- Fim Logo -->
                <div id="menu">
                    <ul>
                        <li class="menu-caixa">
                            <a href="index.php" class="active">Página Inicial</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="pg_btn_menu/pagamento/pagamento.php">Pagamento</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="pg_btn_menu/recebimento/recebimento.php">Recebimento</a>
                        </li>
                        <li class="menu-caixa">
                            <a href="pg_btn_menu/lembrar/lembrar.php" id="tremer">Lembre-se!</a>
                        </li>
                    </ul>
                </div> <!-- Fim Menu -->
            </div><!-- Fim container topo-->
        </div> <!-- Fim div topo -->
    	<section>
			<div id="banner">
			<!--Começa Banner Rotativo de imagens de destaque na página-->
				<div id="banner_img">
				  <img src="visual/img/banner_img/1.jpg" width="100%" height="100%" alt="Banner" />
				</div>
				<div id="botoes">
					<a href="javascript:void(0);" id="banner_img_1" class="hover" onClick="mudaImg('0');">1</a> 
					<a href="javascript:void(0);" id="banner_img_2" onClick="mudaImg('1');">2</a> 
					<a href="javascript:void(0);" id="banner_img_3" onClick="mudaImg('2');">3</a> 
					<a href="javascript:void(0);" id="banner_img_4" onClick="mudaImg('3');">4</a>
				</div>
			</div><!-- Fim Banner -->
            <br />
            <hr class="hr-padrao" />
			<div id="tabela-com-fotos">
            <h2>DIRETORIA ATUAL</h2>
				<table id="tabela">
					<tr>
						<td>
							<div class="div-figure-table">
								<figure>
									<img class="move-balanco" src="visual/img/woman-icon.jpg" alt="Imagem" title="Título" />
									<p> Colaborador 1 </p>
								</figure>
							</div>
						</td>
						<td>
							<div class="div-figure-table">
								<figure>
									<img class="move-balanco" src="visual/img/manager.jpg" alt="Imagem" title="Título" />
									<p> Diretor </p>
								</figure>
							</div>
						</td>
						<td>
							<div class="div-figure-table">
								<figure>
									<img class="move-balanco" src="visual/img/silhouette1.png" alt="Imagem" title="Título"/>
									<p> Colaborador 2</p>
								</figure>
							</div>
						</td>
					</tr>
				</table>
				<hr class="hr-padrao" />
			</div><!-- Fim tabela-com-fotos -->   
			<div id="section-videos-demo">
				<div class="video-container">
					<h1>Video demonstrativo</h1>
					<video class="videos-demo" controls>
						<source src="visual/video/demo-video.mp4" type="video/mp4" />
						<source src="visual/video/demo-video.mp4" type="video/webm" />
					</video>
				</div>
				<div class="video-container">
					<h1>Video demonstrativo</h1>
					<video class="videos-demo" controls>
						<source src="visual/video/demo-video.mp4" type="video/mp4" />
						<source src="visual/video/demo-video.mp4" type="video/webm" />
					</video>
				</div>
			</div><!-- fim Section videos demo-->
        </section>
      		<footer>
           	  <div class="footer">
                <div id="footer-contatos">
                    <div id="footer-logo">
                    </div><!-- Fim Footer logo-->
                    <!--<ul>
                        <li> 
                            <p><a href="">Quais as vantagens?</a></p>
                        </li>
                        <li>
                            <p><a href="">Por que na Nobre?</a></p>
                        </li>
                        <li>
                            <p><a href="">Planos</a></p>
                        </li>
                        <li>
                            <p><a href="">Tire suas dúvidas</a></p>
                        </li>
                    </ul>-->
                </div><!-- fim footer-contatos-->
                <div id="footer-info">
                	<p>Site totalmente Funcional!</p>
                </div><!--Fim footer info-->
                <div id="footer-pagamentos">
                <p></p>
                </div>
                <div id="footer-developer">
               	  <p>Desenvolvido por @LucassRizzo</p>
                </div><!-- Fim footer developer -->
            </div><!--Fim div Footer-->
    	</footer><!--Fim Footer-->
	</body>
</html>