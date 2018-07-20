<style>
	.icon-whats{
		color: #47C756;
		transition: .4s;
	}
	.icon-whats:hover{
		transform: rotate(360deg);
	}
	.icon-face{
		color: #4267B2;
	}
	.icon-insta{
		color: #EE333E;
	}
	.icon-contato{
		font-size: 30px;
		margin: 0 10px 0 0;
	}
	body{
		margin: 0;
		padding: 0;
	}
	.footer-principal{
		margin: 0;
		padding: 0;
	}
	.footer-principal .display-footer{
		display: flex;	
	}
	.footer-principal .display-footer .box-footer{
		position: relative;
		display: flex;
		align-items: center;
		flex-direction: column;
		justify-content: center;
		flex: 1;
	}
	.footer-principal .display-footer .box-footer .social-media{
		position: absolute;
		top: 0;
		margin: auto auto;
		padding: 20px;
	}
	.footer-principal .display-footer .box-footer .contato{
		display: flex;
		width: 50%;
		align-items: center;
		padding: 10px;
	}
	.footer-principal .display-footer .box-footer .contato a{
		text-decoration: none;
		color: #000;
		transition: .2s;
	}
	.footer-principal .display-footer .box-footer .contato a:hover{
		color: #64D071;
	}
	.footer-principal .display-logo{
		display: flex;
		align-items: center;
		justify-content: center;
		background-color: #141414;
		height: 200px;
	}
	@media screen and (max-width: 1024px){
		.footer-principal .display-footer .box-footer .contato{
			width: 60%;
		}
		.footer-principal .display-footer .box-footer .social-media{
			right: 60px;
		}
	}
	@media screen and (max-width: 960px){
		.footer-principal .display-footer .box-footer .contato{
			width: 65%;
		}
	}
	@media screen and (max-width: 800px){
		.footer-principal .display-footer{
			flex-direction: column;
		}
		.footer-principal .display-footer .box-footer .contato{
			width: 45%;
			padding: 20px;
		}
		.footer-principal .display-footer .box-footer .social-media{
			right: none;
		}
	}
	@media screen and (max-width: 640px){
		.footer-principal .display-footer .box-footer .contato{
			width: 50%;
		}
	}
	@media screen and (max-width: 480px){
		.footer-principal .display-footer .box-footer .contato{
			width: 65%;
		}
	}
	@media screen and (max-width: 375px){
		.footer-principal .display-footer .box-footer .contato{
			width: 95%;
			
		}
		.footer-principal .display-footer .box-footer .social-media{
			top: 60px;
			left: 0;
		}
	}
</style>
<footer class="footer-principal">
	<div class="display-footer">
		<div class="box-footer">
			<div class="social-media">
				<i class="fab fa-instagram icon-contato icon-insta"></i>
				<i class="fab fa-facebook icon-contato icon-face"></i>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.2426612265112!2d-49.53098388490025!3d-25.463571440455663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dd177db8e03c41%3A0x69fc1eed40186823!2sR.+Sete+de+Setembro%2C+1269+-+Centro%2C+Campo+Largo+-+PR%2C+83601-170!5e0!3m2!1spt-BR!2sbr!4v1532029710586" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="box-footer">
			<div class="contato">
				<i class="fas fa-map-marker-alt icon-contato"></i>
				<span>R. Sete de Setembro, 1269-Centro, <strong>Campo-Largo - PR</strong>, 83601-170</span>
			</div>
			<div class="contato">
				<a href="https://wa.me/5541992759603/?text=Olá, tudo bem? Estava dando uma olhada no site e gostaria de esclarecer uma dúvida"><i class="fab fa-whatsapp icon-contato icon-whats"></i></a>
				<a href="https://wa.me/5541992759603/?text=Olá, tudo bem? Estava dando uma olhada no site e gostaria de esclarecer uma dúvida"><span>(41) <strong>99275-9603</strong></a> | (41) <strong>3555-1032</strong></span>
			</div>
		</div>
	</div>
	<div class="display-logo">
		<a href="https://www.efectusdigital.com.br/"><img src="imagens/identidadeVisual/logo-efectus-digital-footer.png" alt="Logo Efectus Digital" title="Efectus Digital - Excelência em Marketing"></a>
	</div>
</footer>