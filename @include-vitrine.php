<style>
	.row-reverse{
		flex-direction: row-reverse;
	}
	.main-vitrine{
		background-color: #141414;
	}
	.main-vitrine .content-vitrine{
		width: 85%;
		margin: 0 auto;
		padding: 5% 0 5% 0;
	}
	.main-vitrine .content-vitrine .display-vitrine{
		display: flex;
		justify-content: space-between;
		margin: 5% 0 5% 0;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto{
		display: flex;
		justify-content: flex-end;
		width: 60%;
		height: 400px;
		background-color: #fff;
		background-image: url(imagens/vitrine/background.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		position: relative;
		z-index: 2;
		overflow: hidden;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .text{
		position: absolute;
		right: -550px;
		width: 65%;
		height: 400px;
		background-color: rgba(20, 20, 20, 0.7);
		z-index: -1;
		transition: .4s;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto:hover .text{
		right: 283px;
		z-index: 1;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .reverse-text{
		left: -550px;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto:hover .reverse-text{
		left: 283px;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .text p{
		padding: 50px;
		text-align: justify;
		color: #fff;
		visibility: hidden;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .text:hover p{
		visibility: visible;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .produto{
		width: 35%;
		height: 400px;
		background-color: rgba(222, 189, 48, 0.8);
		z-index: 2;
		transition: .4s;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto:hover .produto{
		background-color: rgba(222, 189, 48, 1);
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .produto .produto-info{
		display: flex;
		flex-direction: column;
		justify-content: center;
		width: 80%;
		margin: 0 auto;
		padding: 16px 0 0 0;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .produto .produto-info .title{
		word-wrap: break-word;
		line-height: 90px;
		width: 100%;
	}	
	.main-vitrine .content-vitrine .display-vitrine .box-produto .produto .produto-info .title h2{
		font-size: 100px;
		border-bottom: 2px solid #141414;
		text-align: right;
		margin: 0;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-produto .produto .produto-info .descricao{
		text-align: right;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada{
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
	.main-vitrine .content-vitrine .display-vitrine .column-reverse{
		flex-direction: column-reverse;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada .text{
		position: absolute;
		width: 100%;
		height: 300px;
		background-color: rgba(20, 20, 20, 0.7);
		bottom: -300px;
		z-index: -1;
		transition: .4s;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada:hover .text{
		bottom: 100px;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada .text-reverse{
		top: -300px;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada:hover .text-reverse{
		top: 100px;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada .text p{
		padding: 50px;
		text-align: justify;
		color: #fff;
		visibility: hidden;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada:hover .text p{
		visibility: visible;	
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada .title{
		width: 100%;
		height: 100px;
		background-color: rgba(222, 189, 48, 0.8);
		line-height: 100px;
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada:hover .title{
		background-color: rgba(222, 189, 48, 1);
	}
	.main-vitrine .content-vitrine .display-vitrine .box-chamada .title h2{
		margin: 0;
		text-align: center;
		font-size: 50px;
	}
</style>
<section class="main-vitrine">
	<div class="content-vitrine">
		<div class="display-vitrine">
			<div class="box-produto">
				<article class="text">
					<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
				</article>
				<div class="produto">
					<div class="produto-info">
						<div class="title">
							<h2>CHAMARIZ</h2>
						</div>
						<div class="descricao">
							<p>Lorem Ipsum é simplesmente uma simulação de texto da</p>
						</div>
					</div>
				</div>
				<div class="texto"></div>
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
				<article class="text reverse-text">
					<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
				</article>
				<div class="produto">
					<div class="produto-info">
						<div class="title">
							<h2>CHAMARIZ</h2>
						</div>
						<div class="descricao">
							<p>Lorem Ipsum é simplesmente uma simulação de texto da</p>
						</div>
					</div>
				</div>
				<div class="texto"></div>
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
	</div>
</section>