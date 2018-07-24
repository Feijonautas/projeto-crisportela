<style>
	.row-reverse{
		flex-direction: row-reverse;
	}
	.main-vitrine{
		background-color: #141414;
		padding: 2.5% 7.5%;
	}
	.main-vitrine .display-vitrine{
		display: flex;
		justify-content: space-between;
		margin: 2.5% 0 5% 0;
	}
	.main-vitrine .display-vitrine .box-produto{
		position: relative;
		display: flex;
		justify-content: flex-end;
		width: 60%;
		height: 400px;
		background-image: url(imagens/vitrine/background.jpg);
		background-size: cover;
		z-index: 2;
		overflow: hidden;
	}
	.main-vitrine .display-vitrine .box-produto .text{
		position: absolute;
		left: 1000px;
		width: 65%;
		height: 400px;
		background-color: rgba(20, 20, 20, 0.7);
		z-index: -1;
		transition: .4s;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.main-vitrine .display-vitrine .box-produto:hover .text{
		left: 0px;
		z-index: 1;
	}
	.main-vitrine .display-vitrine .box-produto .text p{
		text-align: center;
		color: #fff;
		visibility: hidden;
		width: 80%;
	}
	.main-vitrine .display-vitrine .box-produto:hover .text p{
		visibility: visible;	
	}
	.main-vitrine .display-vitrine .box-produto .reverse-text{
		position: absolute;
		right: 1000px;
		width: 65%;
		height: 400px;
		background-color: rgba(20, 20, 20, 0.7);
		z-index: -1;
		transition: .4s;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.main-vitrine .display-vitrine .box-produto:hover .reverse-text{
		right: 0px;
		z-index: 1;
	}
	.main-vitrine .display-vitrine .box-produto .reverse-text p{
		color: #fff;
		visibility: hidden;
		width: 80%;
		text-align: center;
	}
	.main-vitrine .display-vitrine .box-produto:hover .reverse-text p{
		visibility: visible;	
	}
	.main-vitrine .display-vitrine .box-produto .produto{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		width: 25%;
		padding: 0px 5%;
		height: 400px;
		background-color: rgba(222, 189, 48, 0.8);
		z-index: 2;
		transition: .4s;
	}
	.main-vitrine .display-vitrine .box-produto:hover .produto{
		background-color: rgba(222, 189, 48, 1);
	}
	.main-vitrine .display-vitrine .box-produto .produto .title{
		width: 100%;
	}	
	.main-vitrine .display-vitrine .box-produto .produto .title h2{
		font-size: 28px;
		border-bottom: 2px solid #141414;
		text-align: center;
		margin: 0;
	}
	.main-vitrine .display-vitrine .box-produto .produto .descricao{
		text-align: right;
	}
	.main-vitrine .display-vitrine .box-chamada{
		display: flex;
		justify-content: flex-end;
		flex-direction: column;
		width: 35%;
		height: 400px;
		background-color: #fff;
		z-index: 2;
		background-image: url(imagens/vitrine/chamada.jpg);
		position: relative;
		overflow: hidden;
	}
	.main-vitrine .display-vitrine .column-reverse{
		flex-direction: column-reverse;
	}
	.main-vitrine .display-vitrine .box-chamada .text{
		position: absolute;
		width: 100%;
		height: 300px;
		background-color: rgba(20, 20, 20, 0.7);
		bottom: -300px;
		z-index: -1;
		transition: .4s;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.main-vitrine .display-vitrine .box-chamada:hover .text{
		bottom: 100px;	
	}
	.main-vitrine .display-vitrine .box-chamada .text-reverse{
		bottom: 300px;	
	}
	.main-vitrine .display-vitrine .box-chamada:hover .text-reverse{
		bottom: 0px;	
	}
	.main-vitrine .display-vitrine .box-chamada .text p{
		text-align: center;
		color: #fff;
		visibility: hidden;
		width: 80%;
	}
	.main-vitrine .display-vitrine .box-chamada:hover .text p{
		visibility: visible;	
	}
	.main-vitrine .display-vitrine .box-chamada .title{
		width: 100%;
		height: 100px;
		background-color: rgba(222, 189, 48, 0.8);
		line-height: 100px;
	}
	.main-vitrine .display-vitrine .box-chamada:hover .title{
		background-color: rgba(222, 189, 48, 1);
	}
	.main-vitrine .display-vitrine .box-chamada .title h2{
		margin: 0;
		text-align: center;
		font-size: 28px;
	}
	@media screen and (max-width: 1280px){
		.main-vitrine .display-vitrine .box-produto .produto{
			width: 40%;
		}
		.main-vitrine .display-vitrine .box-produto .text{
			width: 50%;
		}
		.main-vitrine .display-vitrine .box-produto .reverse-text{
			width: 50%;	
		}
		@media screen and (max-width: 980px){
			.main-vitrine .display-vitrine .box-produto .text{
				font-size: 14px;
				line-height: 20px;
			}
			.main-vitrine .display-vitrine .box-produto .reverse-text{
				font-size: 14px;
				line-height: 20px;	
			}
			@media screen and (max-width: 840px){
				.main-vitrine .display-vitrine{
					flex-direction: column;
					align-items: center;
				}
				.main-vitrine .display-vitrine .box-produto{
					width: 100%;
					margin-bottom: 5%;
				}
				.main-vitrine .display-vitrine .box-chamada{
					width: 60%;
				}
				@media screen and (max-width: 425px){
					.main-vitrine .display-vitrine .box-produto{
						flex-direction: column;
						height: auto;
					}
					.main-vitrine .display-vitrine .column-reverse{
						flex-direction: column;
					}
					.main-vitrine .display-vitrine .box-produto .text{
						width: 100%;
						height: auto;
						position: unset;
					}
					.main-vitrine .display-vitrine .box-produto .text p{
						visibility: visible;
					}
					.main-vitrine .display-vitrine .box-produto .reverse-text{
						width: 100%;
						height: auto;
						position: unset;
					}
					.main-vitrine .display-vitrine .box-produto .reverse-text p{
						visibility: visible;
					}
					.main-vitrine .display-vitrine .box-produto .produto{
						width: 90%;
						height: 200px;
					}
					.main-vitrine .display-vitrine .box-produto .produto:hover{
						background-color: rgba(222, 189, 48, 0.8);
					}
					.main-vitrine .display-vitrine .box-chamada{
						width: 100%;
					}
					.main-vitrine .display-vitrine .box-chamada .text{
						position: unset;
					}
					.main-vitrine .display-vitrine .box-chamada .text p{
						visibility: visible;
					}
					.main-vitrine .display-vitrine .box-chamada .text-reserve{
						position: unset;	
					}
					.main-vitrine .display-vitrine .box-chamada .text-reserve p{
						visibility: visible;
					}
				}
			}
		}
	}
</style>
<section class="main-vitrine">
	<div class="display-vitrine">
		<div class="box-produto">
			<article class="text">
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
			</article>
			<div class="produto">
				<div class="title">
					<h2>WORKSHOP</h2>
				</div>
				<div class="descricao">
					<p>Lorem Ipsum é simplesmente uma simulação de texto da</p>
				</div>
			</div>
		</div>
		<div class="box-chamada">
			<article class="text">
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos</p>
			</article>
			<div class="title">
				<h2>CHAMADA</h2>
			</div>
		</div>
	</div>
	<div class="display-vitrine row-reverse">
		<div class="box-produto row-reverse">
			<article class="reverse-text">
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.</p>
			</article>
			<div class="produto">
				<div class="title">
					<h2>CHAMARIZ</h2>
				</div>
				<div class="descricao">
					<p>Lorem Ipsum é simplesmente uma simulação de texto da</p>
				</div>
			</div>
		</div>
		<div class="box-chamada column-reverse">
			<article class="text text-reverse">
				<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos</p>
			</article>
			<div class="title">
				<h2>CHAMADA</h2>
			</div>
		</div>
	</div>
</section>