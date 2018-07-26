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
                width: calc(100% - 15%);
				background-color: #141414;
				padding: 7.5%;
            }
			.main-content h1{
				text-align: center;
				color: #fff;
			}
            .main-content .display-contato{
				display: flex;
			}
            .main-content .display-contato .box-contato{
				width: calc(50% - 10%);
				padding: 5%;
				display: flex;
				flex-direction: column;
				align-items: baseline;
				color: #fff;
			}
            .main-content .display-contato .box-contato h2{
				border-bottom: 1px solid #DCB81A; 	
			}
            .main-content .display-contato .box-contato h3{
				border-bottom: 1px solid #DCB81A;	
			}
            .main-content form{
				width: 20%;
				display: flex;
				flex-direction: column;
				align-items: center;
				background-color: #fff;
				margin: 0 auto;
				border-bottom-left-radius: 5px;
				border-bottom-right-radius: 5px;
			}
            .main-content form h3{
				width: 100%;
				height: 60px;
				background-color: #DCB81A;
				color: #fff;
				margin: 0;
				text-align: center;
				line-height: 60px;
				margin-bottom: 10px;
			}
            .main-content form input{
				margin: 10px 0 10px 0;
				width: 85%;
				padding: 0 5px 0 5px;
				height: 25px;
				outline: none;
			}
            .main-content form select{
				width: 89.9%;
				height: 30px;
				margin: 10px 0 10px 0;
			}
            .main-content form .btn-enviar{
				width: 30%;
				border: none;
				transition: .2s;
			}
            .main-content form .btn-enviar:hover{
				background: #DCB81A;
				color: #fff;
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
            	<h1>Contato</h1>
				<div class="display-contato">
					<div class="box-contato">
						<h2>LOJA FÍSICA</h2>
						<span>Endereço: R. Sete de Setembro, 1269 - Centro, Campo Largo - PR, 83601-170</span><br>
						<span>Curitiba, PR</span><br>
						<span>Telefone: (41) 3555-1032</span>
						<h3>Horário</h3>
						<span>Segunda a Sábado das 09:00 às 18:30</span>
					</div>
					<div class="box-contato">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14408.970062948854!2d-49.5287952!3d-25.4635763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x431bbb7bfb684b43!2sStudio+Cris+Portela!5e0!3m2!1spt-BR!2sbr!4v1532637979275" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<form>
					<h3>Entre em contato</h3>
					Nome<br>
					<input type="text" name="nome">
					E-mail<br>
					<input type="text" name="email">
					Telefone<br>
					<input type="text" name="telefone">
					Assunto<br>
					<select>
						<option>-Selecione-</option>
						<option>Sugestões</option>
						<option>Problemas</option>
						<option>Dúvidas</option>
					</select>
					<input class="btn-enviar" type="submit" name="btn">
				</form>
            </div>
        <?php
            require_once "@include-footer-principal.php";
        ?>
        <!--END REQUIRES PADRAO-->
    </body>
</html>
