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
                width: 90%;
				padding: 5%;
				background-color: #141414;
            }
            .main-content .display-banner{
				width: 100%;
				margin: 0 auto;
			}
            .main-content .display-banner .box-title{
				display: flex;
				justify-content: center;
				align-items: center;
				height: 150px;
				background-color: #DCB81A;
			}
            .main-content .display-banner .box-title h1{
				font-size: 50px;
			}
            .main-content .display-banner .box-banner img{
				display: block;
				width: 100%;
			}
            .main-content .display-texto{
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				width: calc(100% - 20%);
				padding: 5% 10%;
				background-color: #fff;
			}
			.main-content .display-texto .box-bar{
				width: 100%;
				height: 1px;
				background-color: #000;
			}
			.main-content .display-texto .box-texto{
				margin-top: 5%;
			}
			.main-content .display-texto .box-texto p{
				text-align: justify;
			}
			@media screen and (max-width: 425px){
				.main-content .display-banner .box-title{
					height: 80px;
				}
				.main-content .display-banner .box-title h1{
					font-size: 30px;
				}
				.main-content .display-texto{
					width: calc(100% - 10%);
					padding: 5% 5%;
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
				<div class="display-banner">
					<div class="box-title">
						<h1>Depilação a Laser</h1>
					</div>
					<div class="box-banner">
						<img src="imagens/interna-servicos/banner.jpg">
					</div>
				</div>
           		<div class="display-texto">
           			<div class="box-bar"></div>
           			<div class="box-texto">
           				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
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
