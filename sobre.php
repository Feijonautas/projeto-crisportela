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
				margin: 0;
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
				flex-direction: column;
				align-items: center;
				width: 100%;
				margin-bottom: 5%;
			}
            .main-content .content-sobre .display-texto .box-texto{
				width: 90%;	
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
				display: flex;
				align-items: center;
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
				opacity: 0.5;
				transition: .3s;
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
						.maincontent .display-espaco-img{
							flex-direction: column;
						}
                        @media screen and (max-width: 425px){
                            .main-content .content-sobre .background{
                                height: 100px;
                            }
                            .main-content .content-sobre .title-sobre h2 {
                                font-size: 20px;
                            }
                            .maincontent .display-espaco .box-img {
                                width: 90%;
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
						<h1>Sobre nós</h1>
					</div>
					<div class="display-sobre">
						<div class="box-sobre">
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p><br/>
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
						</div>
						<div class="box-img">
							<img src="imagens/sobre/450x450.png">
						</div>
					</div>
					<div class="background"></div>
					<div class="display-texto">
						<div class="title-sobre">
							<center>
								<h2>Conceito/Criação/Texto</h2>
							</center>
						</div>
						<div class="box-texto">
							<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
						</div>
					</div>
				</div>
            </div>
            <div class="maincontent">
            	<div class="display-espaco">
            		<div class="box-img">
            			<img src="imagens/sobre/espaco.jpg">
            		</div>
            		<div class="box-espaco">
            			<div class="title">
            				<h2>Nosso espaço</h2>
            			</div>
            			<div class="text-espaco">
            				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
            			</div>
            		</div>
            	</div>
            	<div class="display-espaco-img">
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/exibicao.jpg">
            		</div>
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/teste.jpg">
            		</div>
            		<div class="box-espaco-img">
            			<img src="imagens/sobre/espaco.jpg">
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
