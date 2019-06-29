<!DOCTYPE html>
<html ng-app="meuApp">
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="resource\css\style.css">
	<link rel="stylesheet" href="resource/css/bootstrap.css">
	<script src="resource/js/angular.js"></script>
	<script src="resource/js/angular-route.js"></script>
	<script src="resource/js/script.js"></script>

    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    

</head>
<body ng-app="meuApp">
	<header class="topint">
		<div class="top">
			<a href="http://site1.pc"><div class="topleft"><span class="logo">Mecer</span> Company</div></a>
			<div class="topright">
				<div class="tel"><img src="resource\imagens\telephone.png">800-2345-6789</div>
				<div class="logoFrase">Entre em contato para cadastrar a sua instituição e fazer parte desse projeto</div>
			</div>
		</div>
	</header>
	<nav class="navint">
		<nav class="nav">
			<ul id="navmenu">
				<a href="#/!"><li class="check" onclick="trocaCor(this)">HOME</li></a>
				<a href="#!sobre"><li onclick="trocaCor(this)">SOBRE</li></a>
				<a href="#!ideias"><li onclick="trocaCor(this)">IDEIAS</li></a>
				<a href="#!cadastro" id="cadastro"><li onclick="trocaCor(this)">CADASTRO</li></a>
				<a href="#!academicos" id="login"><li onclick="trocaCor(this)">LOGIN</li></a>
			</ul>
			<ul id="campoLogin">
                <!--se estiver logado vai mostrar o nome do usuario logado e o botão de sair-->
				<?php
                    $logado = isset($_COOKIE['logado'])?$_COOKIE['logado']:'false';
					if ($logado == 'true'){
    					echo "<span>Bem Vindo(a) </span>";
						echo "<span>".base64_decode($_COOKIE['nomeMecer'])."!</span>";
						echo "<a class='btn-primary sair' href='logout.php'>Sair</a>";
						echo "<script> login(true)</script>";
					}else{
                        echo "<script> login(false)</script>";
                    }
				?>
			</ul>
		</nav>
	</nav>

	<div ng-view></div>

	<footer class="rodapeint">
		<div class="rodape">
			<div class="rodapeContatos">
				<div class="rodapeColuna">
					<div class="rodapeLinha">
                        <img src="resource/imagens/localization.png" alt="localization" class="rodapeBotao">
						<p class="rodapeTexto cinza">4578 Marmora Road, Glasgow<br/>D04 89GR</p>
					</div>
					<div class="rodapeLinha">
                        <img src="resource/imagens/envelope.png" alt="mala" class="rodapeBotao">
                        <p class="rodapeTexto azul">info@demolink.org</p>
                    </div>
				</div>
                <div class="rodapeColuna">
                    <div class="rodapeLinha">
                        <img src="resource/imagens/phone2.png" alt="phone" class="rodapeBotao">
                        <p class="rodapeTexto cinza">800-2345-6789</p>
                    </div>
                    <div class="rodapeLinha">
                        <img src="resource/imagens/fax.png" alt="fax" class="rodapeBotao">
                        <p class="rodapeTexto cinza">800-2345-6790</p>
                    </div>
                </div>
                <div class="rodapeColuna">
                    <div class="rodapeLinha">
                        <a href="http://www.facebook.com.br" target="_blank"><img src="resource/imagens/facebook.png" alt="facebook" class="rodapeBotao"></a>
                        <p class="rodapeTexto cinza">Follow on Facebook</p>
                    </div>
                    <div class="rodapeLinha">
                        <a href="https://twitter.com" target="_blank"><img src="resource/imagens/twitter.png" alt="twitter" class="rodapeBotao"></a>
                        <p class="rodapeTexto cinza">Follow on Twitter</p>
                    </div>
                </div>
			</div>
			<div class="rodapePrivacy">
                <p>Business Company @ 2015. Privacy Policy</p>
            </div>
		</div>
	</footer>
</body>
</html>