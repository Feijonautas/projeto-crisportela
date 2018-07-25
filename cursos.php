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
				flex-direction: column;
				align-items: center;
                width: 100%;
				background-color: #141414;
				padding: 5% 0;
            }
            .main-content .display-servicos{
				display: flex;
				width: 90%;
				margin: 2.5% 0;
			}
            .main-content .display-servicos .box-img-servico{
				width: 33%;
				height: 400px;
			}
            .main-content .display-servicos .box-img-servico img{
				width: 100%;
				height: 100%;
			}
            .main-content .display-servicos .box-background{
				width: 4%;
				height: 400px;
				background-color: #ddb81b;
			}
            .main-content .display-servicos .box-servico{
				display: flex;
				flex-direction: column;
				justify-content: center;
				width: calc(63% - 80px);
				height: 400px;
				background-color: #fff;
				padding: 0 40px;
			}
            .main-content .display-servicos .box-servico .text-servico{
				height: 250px;		
			}
            .main-content .display-servicos .box-servico .text-servico p{
				text-align: justify;
			}
            .main-content .display-servicos .box-servico .btn-saiba{
				text-align: right;
			}
            .main-content .display-servicos .box-servico .btn-saiba a{
				padding: 3px 10px;
				background-color: #ddb81b;
				color: #000;
				text-decoration: none;
				border-radius: 3px;
				transition: .2s;
			}
            .main-content .display-servicos .box-servico .btn-saiba a:hover{
				background-color: #ffd326;
			}
			@media screen and (max-width: 768px){
				.main-content .display-servicos{
					flex-direction: column;
					align-items: center;
				}
				.main-content .display-servicos .box-img-servico{
					width: 90%;
				}
				.main-content .display-servicos .box-background{
					width: 90%;
					height: 40px;
				}
				.main-content .display-servicos .box-servico{
					width: calc(90% - 80px);
				}
				.main-content .display-servicos .box-img-servico{
					height: 250px;
				}
				@media screen and (max-width: 425px){
					.main-content .display-servicos .box-servico .text-servico{
						height: auto;
					}
					.main-content .display-servicos{
						margin: 5% 0;
					}
					@media screen and (max-width: 375px){
						.main-content .display-servicos .box-servico{
							width: calc(95% - 40px);
							padding: 20px;
						}
						.main-content .display-servicos .box-background{
							width: 95%;
						}
						.main-content .display-servicos .box-img-servico{
							width: 95%;
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
			<div class="display-servicos">
				<div class="box-img-servico">
					<img src="imagens/cursos/img-teste.jpg">
				</div>
				<div class="box-background"></div>
				<div class="box-servico">
					<div class="title">
						<h3>Nome do Curso</h3>
					</div>
					<div class="text-servico">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica,</p>
					</div>
					<div class="btn-saiba">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
			<div class="display-servicos">
				<div class="box-img-servico">
					<img src="imagens/cursos/img-teste.jpg">
				</div>
				<div class="box-background"></div>
				<div class="box-servico">
					<div class="title">
						<h3>Nome do Curso</h3>
					</div>
					<div class="text-servico">
						<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica,</p>
					</div>
					<div class="btn-saiba">
						<a href="#">Saiba mais</a>
					</div>
				</div>
			</div>
		</div>
        <?php
            /*END PAGE CUSTONS*/
            require_once "@include-footer-principal.php";
        ?>
        <!--END REQUIRES PADRAO-->
    </body>
</html>
