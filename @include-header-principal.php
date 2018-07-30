<style>
	.header-principal{
		position: relative;
		width: 100%;
		display: flex;
		max-height: 100vh;
		overflow: hidden;
	}
	.header-principal .nav-display{
		width: 260px;
		padding: 20px;
		background-color: #2c2e2e;
		color: #fff;
	}
	.header-principal .nav-display .logo-principal{
		width: 150px;
		height: 150px;
		margin: 20px auto 20px auto;
		background-color: #000;
	}
	.header-principal .nav-display .logo-principal img{
		width: 100%;	
	}
	.header-principal .nav-display .links-display{
		width: 150px;
		margin: 20px auto 40px auto;
	}
	.header-principal .nav-display .links-display a{
		display: block;
		text-decoration: none;
		color: #fff;
		font-size: 18px;
		padding: 8px 0px 8px 0px;
		margin: 10px 0px 10px 0px;
		border-left: 0px solid transparent;
		transition: .3s;
	}
	.header-principal .nav-display .links-display a:hover{
		border-left: 2px solid #fff;
		padding-left: 5px;
	}
	.header-principal .nav-display .contact-display{
		position: fixed;
		left: -20px;
		width: 250px;
		height: 80px;
		display: flex;
		background-color: #000;
		align-items: center;
		z-index: 3;
	}
	.header-principal .nav-display .contact-display .numbers{
		width: 170px;
		padding: 20px;
		text-align: right;
	}
	.header-principal .nav-display .contact-display .numbers h3{
		font-size: 16px;
		line-height: 18px;
		font-weight: normal;
	}
	.header-principal .nav-display .contact-display .icon{
		width: 60px;
		height: 80px;
		background-color: #dcb81a;
		text-align: center;
		line-height: 80px;
		font-size: 32px;
	}
	.header-principal .paineis{
		position: relative;
		width: calc(100% - 300px);
		background-color: #eee;
	}
	.header-principal .paineis .banner-display{
		position: relative;
		z-index: 1;
	}
	.header-principal .paineis .banner-display img{
		width: 100%;	
	}
	.header-principal .paineis .banner-display .controller{
		position: absolute;
		bottom: 10px;
		margin: 0 auto;
		left: 0;
		right: 0;
		width: 100%;
		height: 20px;
	}
	.header-principal .paineis .hover-section-display{
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background-color: #eee;
	}
	.header-principal .paineis .hover-section-display .hover-painel{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		visibility: hidden;
		opacity: 0;
		transition: .3s;
	}
	.header-principal .paineis .hover-section-display .active-hover{
		visibility: visible;
		opacity: 1;
	}
	.header-principal .paineis .hover-section-display .hover-painel{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.header-principal .paineis .hover-section-display .hover-painel .alter-nav{
		padding: 20px;
		margin: 20px;
		flex: 1 1 auto;
	}
	.header-principal .paineis .hover-section-display .hover-painel .alter-nav .title{
		text-align: center;
		background-color: #dcb81a;
		color: #111;
		padding: 10px;
		margin: 0px;
	}
	.header-principal .paineis .hover-section-display .hover-painel .alter-nav .links{
		text-align: center;
		background-color: #fff;
		padding: 20px;
	}
	.header-principal .paineis .hover-section-display .hover-painel .alter-nav .links a{
		display: block;
		text-decoration: none;
		color: #333;
		padding: 5px;
		margin: 10px;
		border-bottom: 1px solid transparent;
	}
	.header-principal .paineis .hover-section-display .hover-painel .alter-nav .links a:hover{
		color: #000;
		border-bottom: 1px solid #ccc;
	}
	.slick-dotted{
		margin: 0px;	
	}
	.slick-dotted.slick-slider{
		margin: 0px;
	}
	.slick-dots{
		bottom: 0px;
	}
	.header-principal .menu-mobile{
		position: absolute;
		padding: 20px 50px 20px 50px;
		font-size: 30px;
		display: none;
		z-index: 100;
		top: 20px;
		left: 20px;
		color: #fff;
		cursor: pointer;
	}
	@media screen and (max-width: 768px){
		.header-principal .menu-mobile{
			display: block;
		}
		.header-principal .paineis{
			display: none;
		}
		.header-principal .paineis .banner-display{
			display: none;
		}
		.header-principal .nav-display{
			width: 100%;
			left: 0;
			padding-left: 0px;
			padding-right: 0px;
			transition: .4s;
		}
		.header-principal .nav-display .js-hidden-mobile{
			display: none;
			white-space: nowrap;
			overflow: hidden;
		}
		.header-principal .nav-display .links-display{
			text-align: center;
		}
        @media screen and (max-width: 375px){
            .header-principal .menu-mobile{
                padding: 20px;
            }
        }
	}
</style>

<div class="header-principal">
	<div class="menu-mobile">
		<i class="fas fa-bars"></i>
	</div>
	<div class="nav-display">
		<div class="logo-principal">
			<!--<img src="imagens/identidadeVisual/<?= $cls_paginas->logo; ?>">-->
		</div>
		<div class="js-hidden-mobile">
			<div class="links-display">
				<a href="index.php">INÍCIO</a>
				<a href="sobre.php">SOBRE</a>
				<a href="servicos.php" js-target-hover='hoverServicos'>SERVIÇOS</a>
				<a href="cursos.php" js-target-hover='hoverCursos'>CURSOS</a>
				<a href="">CONTATO</a>
			</div>
			<div class="contact-display">
				<div class="numbers">
					<h3>(41) <b>99275-9603</b></h3>
					<h3>(41) <b>3555-1032</b></h3>
				</div>
				<div class="icon">
					<i class="fab fa-whatsapp"></i>
				</div>
			</div>
		</div>
	</div>
	<div class="paineis">
		<div class="banner-display">
			<div class="slides">
				<img src="imagens/banners/banner1.jpg">
				<img src="imagens/banners/banner2.jpg">
				<img src="imagens/banners/banner3.jpg">
			</div>
			<div class="controller">
				<!--SPAN DAS BOLINHAS DO SLIDER-->
			</div>
		</div>
		<div class="hover-section-display">
			<div class="hover-painel" id="hoverServicos">
				<div class="alter-nav">
					<h3 class='title'>CORPORAL</h3>
					<div class="links">
						<a href="">Serviço A</a>
						<a href="">Serviço B</a>
						<a href="">Serviço C</a>
					</div>
				</div>
				<div class="alter-nav">
					<h3 class='title'>FACIAL</h3>
					<div class="links">
						<a href="">Serviço A</a>
						<a href="">Serviço B</a>
						<a href="">Serviço C</a>
					</div>
				</div>
				<div class="alter-nav">
					<h3 class='title'>OUTROS</h3>
					<div class="links">
						<a href="">Serviço A</a>
						<a href="">Serviço B</a>
						<a href="">Serviço C</a>
					</div>
				</div>
			</div>
			<div class="hover-painel" id="hoverCursos">
				<div class="alter-nav">
					<h3 class='title'>AULA ESTÉTICA</h3>
					<div class="links">
						<a href="">Curso A</a>
						<a href="">Curso B</a>
						<a href="">Curso C</a>
					</div>
				</div>
				<div class="alter-nav">
					<h3 class='title'>WORKSHOP</h3>
					<div class="links">
						<a href="">Curso A</a>
						<a href="">Curso B</a>
						<a href="">Curso C</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		// Set objetos
		var headerPrincipal = $(".header-principal");
		var navDisplay = headerPrincipal.children(".nav-display");
		var linksDisplay = navDisplay.children(".links-display");
		var displayPaineis = $(".paineis");
		var bannerDisplay = displayPaineis.children(".banner-display");
		var hoverSection = displayPaineis.children(".hover-section-display");
		var mobileButton = headerPrincipal.children(".menu-mobile");
		
		// Desktop functions
		function select_painel(div_id = false){
			hoverSection.children(".hover-painel").each(function(){
				$(this).removeClass("active-hover");
			});
			if(div_id != false){
				hoverSection.css("z-index", "50");
				$("#"+div_id).addClass("active-hover");
			}else{
				hoverSection.css("z-index", "0");
			}
		}
		linksDisplay.children("a").each(function(){
			var link = $(this);
			var target = link.attr("js-target-hover");
			target = typeof target != "undefined" ? target : false;
			link.off().on("mouseover", function(){
				select_painel(target);
			});
		});
		
		bannerDisplay.children(".slides").slick({
            infinite: true,
			autoplay: true,
			autoplaySpeed: 5000,
            slidesToShow: 1,
            slidesToScroll: 1,
			arrows: false,
			dots: true,
			appendDots: bannerDisplay.children(".controller"),
        });
		// END Desktop functions
		
		// Mobile functions
		function toggle_mobile(){
			var display = $(".js-hidden-mobile");
			display.stop().slideToggle();
		}
		mobileButton.off().on("click", function(){
			toggle_mobile(); 
		});
		// END Mobile functions
	});
</script>