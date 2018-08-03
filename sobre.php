<?php
    session_start();
    
    require_once "@classe-paginas.php";

    $cls_paginas->set_titulo("Página inicial");
    $cls_paginas->set_descricao("DESCRIÇÃO MODELO ATUALIZAR...");

?>
<!DOCTYPE html>
<html>
    <head>
        <!--<base href="<?= $cls_paginas->get_full_path(); ?>/">-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta name="HandheldFriendly" content="true">
        <meta name="description" content="<?php echo $cls_paginas->descricao;?>">
        <meta name="author" content="Efectus Web">
        <title><?php echo $cls_paginas->titulo;?></title>
        <link type="image/png" rel="icon" href="imagens/identidadeVisual/logo-icon.png">
        <!--DEFAULT LINKS-->
        <?php
            require_once "@link-standard-styles.php";
            require_once "@link-standard-scripts.php";
        ?>
        <!--END DEFAULT LINKS-->
        <!--PAGE CSS-->
        <style>
			.row-reverse{
				flex-direction: row-reverse;
			}
            .main-content{
				display: flex;
				justify-content: center;
				background-color: #141414;
            }
            .main-content .content-sobre{
				width: 90%;
				display: flex;
				flex-direction: column;
				align-items: center;
				background-color: #ffff;
				margin: 5% 0;
			}
            .main-content .content-sobre .title-sobre{
				border-bottom: 1px solid #000;
				width: 90%;
				justify-content: space-between;
				display: flex;
			}
            .main-content .content-sobre .title-sobre h2{
				font-size: 32px;	
			}
            .main-content .content-sobre .display-sobre{
				display: flex;
				justify-content: space-between;
				margin: 3% 3%;
				width: 90%;
			}
            .main-content .content-sobre .display-sobre .box-sobre{
				width: 60%;
			}
            .main-content .content-sobre .display-sobre .box-sobre p{
				text-align: justify;
				line-height: 25px;
			}
            .main-content .content-sobre .display-sobre .box-img{
				width: 37%;
			}
            .main-content .content-sobre .display-sobre .box-img img{
				width: 100%;	
			}
            .main-content .content-sobre .background{
				width: 100%;
                height: 150px;
                background-color: #DCB81A;
			}
			.main-content .content-sobre .display-texto{
				display: flex;
				justify-content: space-between;
				padding: 20px 5%;
			}
            .main-content .content-sobre .display-texto .box-texto{
				width: 45%;
			}
            .main-content .content-sobre .display-texto .box-texto p{
				text-align: justify;
			}
			.maincontent{
				width: 90%;
                padding: 5% 5%;
				background-color: #232323;
			}
			.maincontent .display-espaco{
				display: flex;
				background-color: #fff;
			}
			.maincontent .display-espaco .box-img{
				width: 30%;	
			}
			.maincontent .display-espaco .box-img img{
				width: 100%;
				height: 100%;
			}
			.maincontent .display-espaco .box-espaco{
				display: flex;
				flex-direction: column;
				align-items: center;
				width: 70%;
				background-color: #fff;
			}
			.maincontent .display-espaco .box-espaco .title{
				width: 90%;
				border-bottom: 1px solid #000;
			}
			.maincontent .display-espaco .box-espaco .title h2{
				font-size: 32px;	
			}
			.maincontent .display-espaco .box-espaco .text-espaco{
				width: 90%;
			}
			.maincontent .display-espaco .box-espaco .text-espaco p{
				text-align: justify;	
			}
			.maincontent .display-espaco-img{
				display: flex;
			}
			.maincontent .display-espaco-img .box-espaco-img{
				flex: 1;
				height: 225px;
			}
			.maincontent .display-espaco-img .box-espaco-img img{
				width: 100%;
				height: 100%;
				transition: .3s;
				opacity: 0.5;
			}
			.maincontent .display-espaco-img .box-espaco-img img:hover{
				transform: scale(1.1);
				opacity: 1;
			}
			@media screen and (max-width: 1024px){
				.column{
					flex-direction: column-reverse;
				}
				.main-content .content-sobre .display-sobre{
					flex-direction: column-reverse;
					align-items: center;
				}
				.main-content .content-sobre .display-sobre .box-sobre{
					width: 100%;
				}
				.main-content .content-sobre .display-sobre .box-img{
					margin-bottom: 5%;
					width: auto;
				}
				@media screen and (max-width: 960px){
					.maincontent .display-espaco{
						flex-direction: column;
						align-items: center;
					}
					.maincontent .display-espaco .box-img{
						margin-top: 5%;
						width: 50%;
					}
					.maincontent .display-espaco .box-espaco{
						width: 100%;
					}
					@media screen and (max-width: 768px){
						.maincontent .display-espaco-img .box-espaco-img{
							height: 200px;
						}
						.maincontent .display-espaco .box-img {
							width: 90%;
						}
                        @media screen and (max-width: 425px){
							.main-content .content-sobre .display-texto{
								flex-direction: column;
							}
							.main-content .content-sobre .display-texto .box-texto{
								width: 100%;
							}
							.maincontent .display-espaco-img{
								flex-direction: column;
							}
							.maincontent .display-espaco-img .box-espaco-img img{
								opacity: 1;
							}
							.maincontent .display-espaco-img .box-espaco-img img:hover{
								transform: none;
							}
                            .main-content .content-sobre .background{
                                height: 100px;
                            }
							.main-content .content-sobre .display-sobre .box-sobre p{
								line-height: normal;
							}
                        }
					}
				}
			}
        </style>
        <!--END PAGE CSS-->
        <!--PAGE JS-->
        <script>
            $(document).ready(function(){
                console.log("Página carregada");
            });
        </script>
        <!--END PAGE JS-->
    </head>
    <body>
        <!--REQUIRES PADRAO-->
        <?php
            require_once "@link-body-scripts.php";
            require_once "@include-header-principal.php";
            /*PAGE CUSTONS*/
		?>
            <div class='main-content'>
				<div class="content-sobre">
					<div class="title-sobre">
						<h1>Sobre a Cris</h1>
					</div>
					<div class="display-sobre">
						<div class="box-sobre">
							<p>Atuo na área de Beleza e Estética desde 2011, com diversas especializações Nacionais e Internacionais na Área da Micropigmentação Estética e Corretiva, Remoção a Laser de Maquiagem Permanente e Tatuagem e Designer de Sobrancelhas.</p> <p>Master Trainer em micropigmentação desde 2015 e atualmente Acadêmica em Biomedicina.</p>Com comprometimento profissional nesta área, buscando sempre oferecer o melhor para seus clientes.<p>Destaque empresarial e profissional na cidade de Campo Largo neste segmento atuando com seriedade, capacitação e competência.</p>
							<p>Crescendo em busca de agregar melhores serviços aliados à boa tecnologia e profissionalismo.</p>
						</div>
						<div class="box-img">
							<img src="imagens/sobre/sobre-mim-cris-portela.jpg">
						</div>
					</div>
					<div class="title-sobre">
						<h1>Sobre nós</h1>
					</div>
					<div class="display-sobre row-reverse">
						<div class="box-sobre">
							<p>O Studio Cris Portela situado no bairro Centro, na cidade de Campo Largo PR, iniciou suas atividades através da Profissional Cris Portela, já está na cidade a aproximadamente 6 anos, sendo que reinaugurado em 2017 em novo endereço para melhor atender seus clientes, proporcionando um melhor conforto em sua infraestrutura, agregando novos profissionais e serviços a área da Saúde,Beleza e Estética.</p> 
						</div>
						<div class="box-img">
							<img src="imagens/sobre/sobre-nos-cris-portela.jpg">
						</div>
					</div>
					<div class="background"></div>
					<div class="display-texto">
						<div class="box-texto">
							<div class="title-sobre">
								<h2>Nossa Missão</h2>
							</div>
							<div class="texto">
								<p>é oferecer a melhor solução possível. Somos as possibilidades que gostaríamos de ter. O segredo de cada trabalho está na paixão que se coloca para levá-lo adiante. O segredo da satisfação está nas etapas percorridas para alcançá-la.</p>
							</div>
						</div>
						<div class="box-texto">
							<div class="title-sobre">
								<h2>Nosso Objetivo</h2>
							</div>
							<div class="texto">
								<p>é poder oferecer aos nossos clientes serviços com qualidade, eficiência e segurança. Destacando-se no mercado da Beleza e Estética, promovendo Saúde e bem estar.</p>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="maincontent">
            	<div class="display-espaco">
            		<div class="box-img">
            			<img src="imagens/sobre/recepcao-cris-portela.jpg">
            		</div>
            		<div class="box-espaco">
            			<div class="title">
            				<h2>Nosso espaço</h2>
            			</div>
            			<div class="text-espaco">
            				<p>Nosso espaço oferece grande variedade de serviços Estéticos, atendendo as necessidades de nossos clientes/pacientes que buscam um tratamento personalizado, visando oferecer o que há de melhor e mais moderno no conceito da Estética.</p> <p>Aliado a uma exclusiva equipe profissional especializada e comprometida, para melhor executar os procedimentos proporcionando maior satisfação e conforto aos clientes/pacientes.</p>
            			</div>
            		</div>
            	</div>
            	<div class="display-espaco-img">
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/sala-tratamento-cris-portela.png">
            		</div>
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/escritorio-cris-portela.png">
            		</div>
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/sala-tratamento2-cris-portela.png">
            		</div>
            	</div>
            </div>
        <?php
            require_once "@include-footer-principal.php";
            /*END PAGE CUSTONS*/
        ?>
        <!--END REQUIRES PADRAO-->
    </body>
</html>
